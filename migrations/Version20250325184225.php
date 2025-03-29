<?php

declare(strict_types=1);

namespace Doctrine\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250325184225 extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        // This is the SQL to create the category table
        $this->addSql('CREATE TABLE category (
            id INT AUTO_INCREMENT NOT NULL,
            name VARCHAR(255) NOT NULL,
            PRIMARY KEY(id)
        );');
    }

    public function down(Schema $schema): void
    {
        // This is the SQL to drop the category table
        $this->addSql('DROP TABLE category;');
    }
}
