<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RoleController extends AbstractController
{
    /**
     * @Route("/add-role", name="add_role")
     */
    public function addRole(EntityManagerInterface $entityManager): Response
    {
        // Trouver l'utilisateur par son nom d'utilisateur
        $user = $entityManager->getRepository(User::class)->findOneBy(['username' => 'laura']);

        if ($user) {
            // Ajouter un rôle
            $user->setRoles(['ROLE_USER']);
            $entityManager->flush();

            return new Response('Rôle ajouté avec succès à ' . $user->getUsername());
        }

        return new Response('Utilisateur non trouvé');
    }
}
