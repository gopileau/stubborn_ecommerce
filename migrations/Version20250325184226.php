<?php

declare(strict_types=1);

namespace Doctrine\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250325184226 extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        // This is the SQL to add the sizes column to the Product table
        $this->addSql('ALTER TABLE product ADD sizes JSON NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // This is the SQL to drop the sizes column from the Product table
        $this->addSql('ALTER TABLE product DROP sizes');
    }
}
