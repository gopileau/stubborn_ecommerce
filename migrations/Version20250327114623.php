<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250327114623 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Change column types for product and user tables';
    }

    public function up(Schema $schema): void
    {
        // Change sizes and stock columns to JSON type in product table
        $this->addSql(<<<'SQL'
            ALTER TABLE product 
            CHANGE sizes sizes JSON NOT NULL COMMENT '(DC2Type:json)', 
            CHANGE stock stock JSON NOT NULL COMMENT '(DC2Type:json)', 
            CHANGE featured featured TINYINT(1) NOT NULL
        SQL);

        // Change name to username and delivery_address to address in user table
        $this->addSql(<<<'SQL'
            ALTER TABLE user 
            CHANGE name username VARCHAR(255) NOT NULL, 
            CHANGE delivery_address address VARCHAR(255) DEFAULT NULL
        SQL);
    }

    public function down(Schema $schema): void
    {
        // Revert changes for product table
        $this->addSql(<<<'SQL'
            ALTER TABLE product 
            CHANGE sizes sizes LONGTEXT NOT NULL, 
            CHANGE stock stock LONGTEXT NOT NULL, 
            CHANGE featured featured TINYINT(1) DEFAULT 0 NOT NULL
        SQL);

        // Revert changes for user table
        $this->addSql(<<<'SQL'
            ALTER TABLE user 
            CHANGE username name VARCHAR(255) NOT NULL, 
            CHANGE address delivery_address VARCHAR(255) DEFAULT NULL
        SQL);
    }
}