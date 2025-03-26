<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250205232146 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create cart and product tables if they do not exist';
    }

    public function up(Schema $schema): void
    {
        // Create cart table if it does not exist
        // $this->addSql('CREATE TABLE IF NOT EXISTS cart ( // Commented out to prevent duplicate table error
        //     id INT AUTO_INCREMENT NOT NULL,
        //     user_id INT NOT NULL,
        //     INDEX IDX_BA388B7A76ED395 (user_id),
        //     PRIMARY KEY(id)
        // ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');


        // Create product table if it does not exist
        // $this->addSql('CREATE TABLE IF NOT EXISTS product ( // Commented out to prevent duplicate table error
        //     id INT AUTO_INCREMENT NOT NULL,
        //     name VARCHAR(255) NOT NULL,
        //     size VARCHAR(10) NOT NULL,
        //     price DOUBLE PRECISION NOT NULL,
        //     stock JSON NOT NULL COMMENT \'(DC2Type:json)\',
        //     PRIMARY KEY(id)
        // ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');


        // Add foreign key constraint if it does not exist
        $this->addSql('ALTER TABLE cart DROP FOREIGN KEY IF EXISTS FK_BA388B7A76ED395');
        $this->addSql('ALTER TABLE cart DROP FOREIGN KEY IF EXISTS FK_BA388B7A76ED395');
        // $this->addSql('ALTER TABLE cart ADD CONSTRAINT FK_BA388B7A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');




    }

    public function down(Schema $schema): void
    {
        // Drop foreign key constraint if it exists
        $this->addSql('ALTER TABLE cart DROP FOREIGN KEY IF EXISTS FK_BA388B7A76ED395');
        $this->addSql('DROP TABLE IF EXISTS cart');
        $this->addSql('DROP TABLE IF EXISTS product');
    }
}
