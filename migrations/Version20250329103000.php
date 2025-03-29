<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250329103000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Drop foreign key constraint from cart table without IF EXISTS';
    }

    public function up(Schema $schema): void
    {
        // Drop foreign key constraint without IF EXISTS
        $this->addSql('ALTER TABLE cart DROP FOREIGN KEY FK_BA388B7A76ED395');
    }

    public function down(Schema $schema): void
    {
        // Re-add foreign key constraint if needed
        $this->addSql('ALTER TABLE cart ADD CONSTRAINT FK_BA388B7A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }
}
