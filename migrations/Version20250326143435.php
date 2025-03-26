<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250326143435 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cart DROP FOREIGN KEY FK_CART_PRODUCT');
        $this->addSql('DROP INDEX FK_CART_PRODUCT ON cart');
        $this->addSql('ALTER TABLE cart DROP FOREIGN KEY FK_CART_USER');
        $this->addSql('ALTER TABLE cart DROP product_id, DROP quantity');
        $this->addSql('DROP INDEX fk_cart_user ON cart');
        $this->addSql('CREATE INDEX IDX_BA388B7A76ED395 ON cart (user_id)');
        $this->addSql('ALTER TABLE cart ADD CONSTRAINT FK_CART_USER FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE product CHANGE sizes sizes JSON NOT NULL COMMENT \'(DC2Type:json)\', CHANGE stock stock JSON NOT NULL COMMENT \'(DC2Type:json)\', CHANGE featured featured TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE user DROP reset_token, CHANGE roles roles JSON NOT NULL COMMENT \'(DC2Type:json)\'');
        $this->addSql('DROP INDEX email ON user');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON user (email)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cart DROP FOREIGN KEY FK_BA388B7A76ED395');
        $this->addSql('ALTER TABLE cart ADD product_id INT NOT NULL, ADD quantity INT NOT NULL');
        $this->addSql('ALTER TABLE cart ADD CONSTRAINT FK_CART_PRODUCT FOREIGN KEY (product_id) REFERENCES product (id)');
        $this->addSql('CREATE INDEX FK_CART_PRODUCT ON cart (product_id)');
        $this->addSql('DROP INDEX idx_ba388b7a76ed395 ON cart');
        $this->addSql('CREATE INDEX FK_CART_USER ON cart (user_id)');
        $this->addSql('ALTER TABLE cart ADD CONSTRAINT FK_BA388B7A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE product CHANGE sizes sizes LONGTEXT NOT NULL COLLATE `utf8mb4_bin`, CHANGE stock stock LONGTEXT NOT NULL COLLATE `utf8mb4_bin`, CHANGE featured featured TINYINT(1) DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE user ADD reset_token VARCHAR(255) DEFAULT NULL, CHANGE roles roles JSON DEFAULT \'["ROLE_USER"]\' NOT NULL COMMENT \'(DC2Type:json)\'');
        $this->addSql('DROP INDEX uniq_8d93d649e7927c74 ON user');
        $this->addSql('CREATE UNIQUE INDEX email ON user (email)');
    }
}
