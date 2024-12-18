<?php

namespace App\Controller;

use App\Form\BookReviewType;
use App\Entity\BookReview;

use App\Entity\Book;
use App\Entity\BookLoan;
use App\Form\BookType;
use App\Form\BookLoanType;
use App\Repository\BookRepository;
use App\Repository\LoansRepository;
use App\Repository\BookLoanRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\SecurityBundle\Attribute\IsGranted;

class BookController extends AbstractController
{
    /**
     * Liste tous les livres.
     */
    #[Route('/book', name: 'app_book')]
    public function index(BookRepository $bookRepo): Response
    {
        $books = $bookRepo->findAll();

        // Générer la disponibilité pour chaque livre
        foreach ($books as $book) {
            $book->generateAvailability(); // Méthode pour générer une disponibilité
        }

        return $this->render('book/index.html.twig', [
            'books' => $books,
        ]);
    }

    /**
     * Affiche les détails d'un livre spécifique.
     */
    #[Route('/book/{id}', name: 'book_detail')]
    public function bookDetail(Book $book, Request $request, EntityManagerInterface $entityManager): Response
    {
        // Générer les informations supplémentaires du livre
        $book->generateAvailability(); // Générer la disponibilité
        $bookCondition = $book->generateBookCondition(); // Générer l'état du livre

        // Créer une nouvelle instance de BookReview pour le formulaire
        $review = new BookReview();

        // Créer le formulaire pour ajouter un commentaire
        $form = $this->createForm(BookReviewType::class, $review);

        // Traiter la soumission du formulaire
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Associer l'utilisateur connecté et le livre au commentaire
            $review->setUser($this->getUser());
            $review->setBook($book);
            $review->setDateCommentaire(new \DateTime());

            // Enregistrer le commentaire dans la base de données
            $entityManager->persist($review);
            $entityManager->flush();

            // Ajouter un message flash
            $this->addFlash('success', 'Votre commentaire a été ajouté.');

            // Rediriger vers la même page
            return $this->redirectToRoute('book_detail', ['id' => $book->getId()]);
        }

        // Rendre le template et transmettre les données nécessaires à Twig
        return $this->render('book/detail.html.twig', [
            'book' => $book,
            'bookCondition' => $bookCondition, // État du livre
            'reviewForm' => $form->createView(), // Formulaire de commentaire
        ]);
    }

    /**
     * Gestion des prêts : Vérifie la disponibilité d'un livre.
     */
    #[Route('/book/loan/{id}', name: 'app_book_loan')]
public function loan(Book $book, Request $request, EntityManagerInterface $entityManager): Response
{
    $bookLoan = new BookLoan();
    $bookLoan->setBook($book);
    $bookLoan->setDateEmprunt(new \DateTime());

    $user = $this->getUser();
    if (!$user) {
        throw $this->createAccessDeniedException('Vous devez être connecté pour emprunter un livre.');
    }
    $bookLoan->setUser($user);

    $form = $this->createForm(BookLoanType::class, $bookLoan);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->persist($bookLoan);
        $entityManager->flush();

        if ($request->isXmlHttpRequest()) {
            // Réponse AJAX pour succès
            return $this->json(['status' => 'success', 'message' => 'Votre emprunt a bien été enregistré.']);
        }

        $this->addFlash('success', 'Votre emprunt a bien été enregistré.');
        return $this->redirectToRoute('book_detail', ['id' => $book->getId()]);
    }

    return $this->render('book/loan.html.twig', [
        'form' => $form->createView(),
        'book' => $book,
    ]);
}


    /**
     * Liste de tous les prêts.
     */
    #[Route('/book/loans', name: 'app_book_loans')]
    public function loans(LoansRepository $loansRepository): Response
    {
        $user = $this->getUser(); // Récupère l'utilisateur connecté

        if ($user) {
            // Si l'utilisateur est connecté, on récupère ses prêts
            $bookLoans = $loansRepository->findByUser($user->getId());
        } else {
            // Si l'utilisateur n'est pas connecté, on récupère tous les prêts
            $bookLoans = $loansRepository->findAllLoans();
        }

        return $this->render('book/loans.html.twig', [
            'bookLoans' => $bookLoans,
        ]);
    }

    /**
     * Crée un nouveau livre avec upload d'image.
     */
    #[Route('/book/new', name: 'book_new')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $book = new Book();

        // Crée le formulaire BookType
        $form = $this->createForm(BookType::class, $book);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Gestion de l'upload de l'image
            $imageFile = $form->get('image')->getData();

            if ($imageFile) {
                $newFilename = uniqid().'.'.$imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('kernel.project_dir') . '/public/uploads/books',
                        $newFilename
                    );
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors du téléchargement de l\'image.');
                }

                $book->setImage('/uploads/books/' . $newFilename);
            }

            // Sauvegarder le livre en base de données
            $entityManager->persist($book);
            $entityManager->flush();

            $this->addFlash('success', 'Le livre a été ajouté avec succès.');

            return $this->redirectToRoute('app_book');
        }

        return $this->render('book/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }


    
}

