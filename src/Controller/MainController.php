<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'security_home')]
    
    public function homepage(): Response
    {
        return new Response('<strong>Bienvenue sur votre site Symfony !</strong>');
    }
}
