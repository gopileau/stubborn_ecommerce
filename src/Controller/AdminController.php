<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
public function index(): Response
{
    // Vérifier si l'utilisateur est connecté et a le rôle 'ROLE_ADMIN'
    if (!$this->getUser() || !in_array('ROLE_ADMIN', $this->getUser()->getRoles())) {
        return $this->redirectToRoute('app_login');  // Redirection vers la page de connexion si non admin
    }

    return $this->render('admin/index.html.twig', [
        'controller_name' => 'AdminController',
    ]);
}

}