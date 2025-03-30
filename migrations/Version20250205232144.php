<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250205232144 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add sizes column to Product table';
    }

    public function up(Schema $schema): void
    {
        // This migration adds the sizes column to the Product table
        // $this->addSql('ALTER TABLE product ADD sizes VARCHAR(255) DEFAULT NULL'); // Commented out to prevent duplicate column error

    }

    public function down(Schema $schema): void
    {
        // This migration removes the sizes column from the Product table
        $this->addSql('ALTER TABLE product DROP sizes');
    }
}
