<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250131222211 extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        // This is the SQL to add the sizes column
        $this->addSql('ALTER TABLE product ADD sizes JSON NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // This is the SQL to remove the sizes column
        $this->addSql('ALTER TABLE product DROP sizes');
    }
}
