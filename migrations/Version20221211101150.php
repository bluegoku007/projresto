<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221211101150 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE restaurant ADD nom_resto_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE restaurant ADD CONSTRAINT FK_EB95123FBC322D58 FOREIGN KEY (nom_resto_id) REFERENCES reservation (id)');
        $this->addSql('CREATE INDEX IDX_EB95123FBC322D58 ON restaurant (nom_resto_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE restaurant DROP FOREIGN KEY FK_EB95123FBC322D58');
        $this->addSql('DROP INDEX IDX_EB95123FBC322D58 ON restaurant');
        $this->addSql('ALTER TABLE restaurant DROP nom_resto_id');
    }
}
