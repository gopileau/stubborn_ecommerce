<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordHasherInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use App\Repository\UserRepository;
use App\Entity\User;
use App\Form\RegistrationType;
use App\Form\LoginType;

#[Route('/security')]
class SecurityController extends AbstractController
{
    /**
     * @Route("/inscription", name="security_registration", methods={"GET", "POST"})
     */
    public function registration(Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher, MailerInterface $mailer): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Hash user password before storing in database
            $hashedPassword = $passwordHasher->hashPassword($user, $user->getPassword());
            $user->setPassword($hashedPassword);

            // Generate activation token
            $token = bin2hex(random_bytes(32));
            $user->setActivationToken($token);
            $user->setIsActive(false); // Set user as inactive

            // Persist user to the database
            $entityManager->persist($user);
            $entityManager->flush();

            // Send activation email
            $email = (new Email())
                ->from('no-reply@monsite.com')
                ->to($user->getEmail())
                ->subject('Activate your account')
                ->html('<p>Please click the link below to activate your account:</p>
                        <p><a href="' . $this->generateUrl('app_activate_account', ['token' => $token], UrlGeneratorInterface::ABSOLUTE_URL) . '">Activate my account</a></p>');

            $mailer->send($email);
            $this->addFlash('success', 'An activation email has been sent.');

            return $this->redirectToRoute('security_login');
        }

        return $this->render('security/registration.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/connexion", name="security_login", methods={"GET", "POST"})
     * @Route("/login", name="security_login_check", methods={"POST"})
     */
    public function login(Request $request, AuthenticationUtils $authenticationUtils): Response
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        if ($this->getUser ()) {
            return $this->redirectToRoute('app_home_connected');
        }

        $form = $this->createForm(LoginType::class, [
            'email' => $lastUsername ?? '',
        ]);

        return $this->render('security/login.html.twig', [
            'form' => $form->createView(),
            'error' => $error,
            'last_username' => $lastUsername,
        ]);
    }

    /**
     * @Route("/deconnexion", name="security_logout")
     */
    public function logout(): void
    {
        // Symfony will handle the logout automatically
    }

    /**
     * @Route("/activate/{token}", name="app_activate_account")
     */
    public function activateAccount(string $token, UserRepository $userRepository, EntityManagerInterface $entityManager): Response
    {
        $user = $userRepository->findOneBy(['activationToken' => $token]);

        if (!$user) {
            throw $this->createNotFoundException('Invalid token');
        }

        $user->setIsActive(true);
        $user->setActivationToken(null);
        $entityManager->flush();

        $this->addFlash('success', 'Your account has been activated! You can now log in.');

        return $this->redirectToRoute('security_login');
    }

    /**
     * @Route("/forgot-password", name="app_forgot_password", methods={"GET", "POST"})
     */
    public function forgotPassword(Request $request, MailerInterface $mailer, UserRepository $userRepository, EntityManagerInterface $entityManager): Response
    {
        if ($request->isMethod('POST')) {
            $email = $request->request->get('email');
            $user = $userRepository->findOneBy(['email' => $email]);

            if ($user) {
                $resetToken = bin2hex(random_bytes(32));
                $user->setResetToken($resetToken);
                $entityManager->flush();

                $emailMessage = (new Email())
                    ->from('no-reply@monsite.com')
                    ->to($user->getEmail())
                    ->subject('Password Reset Request')
                    ->html('<p>To reset your password, please click the link below:</p>
                            <p><a href="' . $this->generateUrl('app_reset_password', ['token' => $resetToken], UrlGeneratorInterface::ABSOLUTE_URL) . '">Reset my password</a></p>');

                $mailer->send($emailMessage);
                $this->addFlash('success', 'A password reset email has been sent.');
            } else {
                $this->addFlash('danger', 'No user found with this email.');
            }
        }

        return $this->render('security/forgot_password.html.twig');
    }

    /**
     * @Route("/reset-password/{token}", name="app_reset_password", methods={"GET", "POST"})
     */
    public function resetPassword(string $token, Request $request, UserRepository $userRepository, EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher): Response
    {
        $user = $userRepository->findOneBy(['resetToken' => $token]);

        if (!$user) {
            throw $this->createNotFoundException('Invalid token');
        }

        if ($request->isMethod('POST')) {
            $newPassword = $request->request->get('password');
            $hashedPassword = $passwordHasher->hashPassword($user, $newPassword);
            $user->setPassword($hashedPassword);
            $user->setResetToken(null);
            $entityManager->flush();

            $this->addFlash('success', 'Your password has been reset. You can now log in.');

            return $this->redirectToRoute('security_login');
        }

        return $this->render('security/reset_password.html.twig', ['token' => $token]);
    }
}