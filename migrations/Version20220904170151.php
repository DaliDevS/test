<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220904170151 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE result_entity DROP FOREIGN KEY FK_EAB77F34C07A1D97');
        $this->addSql('CREATE TABLE entity_draw (id INT AUTO_INCREMENT NOT NULL, eid INT NOT NULL, drawn_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE entity_result (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, value INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE draw_entity');
        $this->addSql('DROP TABLE result_entity');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE draw_entity (id INT AUTO_INCREMENT NOT NULL, eid INT NOT NULL, drawn_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE result_entity (id INT AUTO_INCREMENT NOT NULL, draw_index_id INT NOT NULL, type VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, value INT NOT NULL, INDEX IDX_EAB77F34C07A1D97 (draw_index_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE result_entity ADD CONSTRAINT FK_EAB77F34C07A1D97 FOREIGN KEY (draw_index_id) REFERENCES draw_entity (id)');
        $this->addSql('DROP TABLE entity_draw');
        $this->addSql('DROP TABLE entity_result');
    }
}
