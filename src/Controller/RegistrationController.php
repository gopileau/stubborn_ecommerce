<?php
namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Doctrine\ORM\EntityManagerInterface; // Ajoutez cette ligne

class RegistrationController extends AbstractController
{
    private $passwordHasher;
    private $entityManager; // Ajoutez cette propriété

    public function __construct(UserPasswordHasherInterface $passwordHasher, EntityManagerInterface $entityManager) // Injectez EntityManagerInterface
    {
        $this->passwordHasher = $passwordHasher;
        $this->entityManager = $entityManager; // Assignez-le à la propriété
    }

    #[Route('/register', name: 'app_register')]
    public function register(Request $request): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationType::class, $user);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            // Vérifiez si l'email existe déjà
            $existingUser  = $this->entityManager->getRepository(User::class)->findOneBy(['email' => $user->getEmail()]);
            if ($existingUser ) {
                $this->addFlash('error', 'Cette adresse e-mail est déjà utilisée.');
                return $this->render('registration/register.html.twig', [
                    'form' => $form->createView(),
                ]);
            }
    
            // Récupérer le mot de passe non haché
            $plainPassword = $form->get('password')->getData();
    
            // Hachage du mot de passe
            $hashedPassword = $this->passwordHasher->hashPassword($user, $plainPassword);
            $user->setPassword($hashedPassword);
    
            // Sauvegarde de l'utilisateur
            $this->entityManager->persist($user);
            $this->entityManager->flush();
    
            // Message de succès
            $this->addFlash('success', 'Inscription réussie ! Vous pouvez maintenant vous connecter.');
            return $this->redirectToRoute('security_login');
        }
    
        return $this->render('registration/register.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}