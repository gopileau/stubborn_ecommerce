<?php

namespace App\Command;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class AddRoleCommand extends Command
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct();
        $this->entityManager = $entityManager;
    }

    protected static $defaultName = 'app:add-role';

    protected function configure()
    {
        $this
            ->setDescription('Ajoute un rôle à un utilisateur spécifié')
            ->setHelp('Cette commande permet d\'ajouter un rôle à un utilisateur');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        // Trouver l'utilisateur par son nom d'utilisateur
        $user = $this->entityManager->getRepository(User::class)->findOneBy(['username' => 'laura']);

        if ($user) {
            // Ajouter un rôle
            $user->setRoles(['ROLE_USER']);
            $this->entityManager->flush();
            $output->writeln('Rôle ajouté avec succès à ' . $user->getUsername());
        } else {
            $output->writeln('Utilisateur non trouvé');
        }

        return Command::SUCCESS;
    }
}
