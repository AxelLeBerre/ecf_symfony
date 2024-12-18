<?php

namespace App\Controller;

use App\Entity\Book;
use App\Entity\BookLoan;
use App\Form\BookLoanType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BookLoanController extends AbstractController
{
    // Cette route doit accepter un paramètre "id" pour le livre spécifique
    #[Route('/book/loan/{id}', name: 'app_book_loan')]
    public function loan(Book $book, Request $request, EntityManagerInterface $entityManager): Response
    {
        // Vérifier si l'utilisateur est connecté
        $user = $this->getUser();
        if (!$user) {
            throw $this->createAccessDeniedException('Vous devez être connecté pour emprunter un livre.');
        }

        // Créer une nouvelle instance de BookLoan
        $bookLoan = new BookLoan();
        $bookLoan->setBook($book); // Associer le livre
        $bookLoan->setUser($user); // Associer l'utilisateur
        $bookLoan->setDateEmprunt(new \DateTime()); // Définir la date d'emprunt

        // Créer le formulaire pour BookLoan
        $form = $this->createForm(BookLoanType::class, $bookLoan);
        $form->handleRequest($request);

        // Vérifier si le formulaire est soumis et valide
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($bookLoan);
            $entityManager->flush();

            // Ajouter un message flash pour la confirmation
            $this->addFlash('success', 'Le prêt a été enregistré avec succès.');

            // Rediriger vers la page de détail du livre
            return $this->redirectToRoute('book_detail', ['id' => $book->getId()]);
        }

        // Passer le formulaire et l'objet bookLoan à la vue
        return $this->render('book/loan.html.twig', [
            'form' => $form->createView(),
            'book' => $book,  // Passer 'book' à la vue pour l'utiliser dans le template
            'bookLoan' => $bookLoan,  // Passer 'bookLoan' pour y accéder dans le template
            ]);
    }

}    
