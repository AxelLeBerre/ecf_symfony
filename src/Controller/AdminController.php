<?php
// src/Controller/AdminController.php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    // Route pour afficher le tableau de bord admin
    #[Route('/admin', name: 'admin_dashboard')]
    public function dashboard(EntityManagerInterface $entityManager): Response
    {
        // Vérification du rôle d'admin
        $this->denyAccessUnlessGranted('ROLE_ADMIN');  // Si l'utilisateur n'est pas admin, il sera bloqué

        // Vérifier les rôles de l'utilisateur connecté
        dump($this->getUser()->getRoles()); // Affiche les rôles de l'utilisateur connecté

        // Récupérer les utilisateurs pour afficher sur le tableau de bord
        $users = $entityManager->getRepository(User::class)->findAll();

        return $this->render('admin/dashboard.html.twig', [
            'users' => $users,
        ]);
    }
    // Route pour promouvoir un utilisateur à administrateur
    #[Route('/admin/devenir-admin', name: 'admin_promote_user')]
    public function promoteUser(EntityManagerInterface $entityManager): Response
    {
        // Vérifier que l'utilisateur est connecté et a le rôle ROLE_USER
        $this->denyAccessUnlessGranted('ROLE_USER');  // Si l'utilisateur n'a pas ce rôle, il sera bloqué

        $user = $this->getUser();  // Récupérer l'utilisateur connecté

        // Vérifier si l'utilisateur est déjà administrateur
        if (in_array('ROLE_ADMIN', $user->getRoles())) {
            $this->addFlash('warning', 'Vous êtes déjà administrateur.');
        } else {
            // Ajouter le rôle ROLE_ADMIN à l'utilisateur
            $user->setRoles(array_merge($user->getRoles(), ['ROLE_ADMIN']));
            $entityManager->flush();  // Sauvegarder les modifications

            $this->addFlash('success', 'Vous êtes maintenant un administrateur.');
        }

        // Rediriger vers le tableau de bord admin
        return $this->redirectToRoute('admin_dashboard');
    }

    // Modifier un utilisateur
    #[Route('/admin/user/edit/{id}', name: 'admin_edit_user')]
    public function editUser(User $user, Request $request, EntityManagerInterface $entityManager): Response
    {
        // Vérifier que l'utilisateur est connecté et a le rôle admin
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        // Créer le formulaire pour modifier l'utilisateur
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        // Si le formulaire est soumis et valide, mettre à jour l'utilisateur
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'Utilisateur modifié avec succès.');
            return $this->redirectToRoute('admin_dashboard');
        }

        // Afficher le formulaire de modification
        return $this->render('admin/edit_user.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
