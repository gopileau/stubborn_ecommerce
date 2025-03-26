<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250205232145 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Check and create user table if it does not exist';
    }

    public function up(Schema $schema): void
    {
        // Check if the user table exists
        $this->addSql('CREATE TABLE IF NOT EXISTS user (


            id INT(11) NOT NULL AUTO_INCREMENT,
            username VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL,
            password VARCHAR(255) NOT NULL,
            address VARCHAR(255) DEFAULT NULL,
            roles LONGTEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL COMMENT \'(DC2Type:json)\' CHECK (json_valid(roles)),
            PRIMARY KEY (id),
            UNIQUE KEY UNIQ_8D93D649E7927C74 (email)
        ) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;');
    }

    public function down(Schema $schema): void
    {
        // Drop the user table if it exists
        $this->addSql('DROP TABLE IF EXISTS user;');
    }
}
