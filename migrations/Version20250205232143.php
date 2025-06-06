<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250205232143 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // Check if the 'user' table exists before altering it
        if ($schema->hasTable('user')) {
            // $this->addSql('ALTER TABLE user CHANGE name username VARCHAR(255) NOT NULL'); // Commented out to prevent error

        }
    }


    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user CHANGE username name VARCHAR(255) NOT NULL');
    }
}
