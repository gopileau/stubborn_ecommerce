<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250205232148 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Recreate cart and product tables without duplicate columns';
    }

    public function up(Schema $schema): void
    {
        // Drop the cart table if it exists
        // $this->addSql('DROP TABLE IF EXISTS cart'); // Commented out to prevent errors


        // Create cart table
        $this->addSql('CREATE TABLE cart (
            id INT AUTO_INCREMENT NOT NULL,
            user_id INT NOT NULL,
            INDEX IDX_BA388B7A76ED395 (user_id),
            PRIMARY KEY(id)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');

        // Drop the product table if it exists
        // $this->addSql('DROP TABLE IF EXISTS product'); // Commented out to prevent errors


        // Create product table
        $this->addSql('CREATE TABLE product (
            id INT AUTO_INCREMENT NOT NULL,
            category_id INT NOT NULL,
            name VARCHAR(255) NOT NULL,
            sizes LONGTEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL COMMENT \'(DC2Type:json)\' CHECK (json_valid(`sizes`)),
            price DOUBLE NOT NULL,
            stock LONGTEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL COMMENT \'(DC2Type:json)\' CHECK (json_valid(`stock`)),
            featured TINYINT(1) NOT NULL DEFAULT 0,

            image VARCHAR(255) DEFAULT NULL,
            description VARCHAR(255) DEFAULT NULL,
            PRIMARY KEY(id),
            KEY IDX_D34A04AD12469DE2 (category_id),
            CONSTRAINT FK_D34A04AD12469DE2 FOREIGN KEY (category_id) REFERENCES category (id)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE=utf8mb4_unicode_ci ENGINE=InnoDB');

        // Add foreign key constraint
        $this->addSql('ALTER TABLE cart ADD CONSTRAINT FK_BA388B7A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // Drop foreign key constraint if it exists
        $this->addSql('ALTER TABLE cart DROP FOREIGN KEY IF EXISTS FK_BA388B7A76ED395');
        $this->addSql('DROP TABLE IF EXISTS cart');
        $this->addSql('DROP TABLE IF EXISTS product');
    }
}
