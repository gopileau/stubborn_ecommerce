<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250205232147 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Drop and recreate cart and product tables';
    }

    public function up(Schema $schema): void
    {
        // Supprimer les tables si elles existent
        $this->addSql('DROP TABLE IF EXISTS cart');
        $this->addSql('DROP TABLE IF EXISTS product');

        // Créer la table `product`
        $this->addSql('CREATE TABLE product (
            id INT AUTO_INCREMENT NOT NULL,
            name VARCHAR(255) NOT NULL,
            size VARCHAR(10) NOT NULL,
            price DOUBLE PRECISION NOT NULL,
            stock JSON NOT NULL COMMENT \'(DC2Type:json)\',
            PRIMARY KEY(id)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');

        // Créer la table `cart`
        $this->addSql('CREATE TABLE cart (
            id INT AUTO_INCREMENT NOT NULL,
            user_id INT NOT NULL,
            INDEX IDX_BA388B7A76ED395 (user_id),
            PRIMARY KEY(id),
            CONSTRAINT FK_BA388B7A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // Supprimer les tables en rollback
        $this->addSql('DROP TABLE IF EXISTS cart');
        $this->addSql('DROP TABLE IF EXISTS product');
    }
}
