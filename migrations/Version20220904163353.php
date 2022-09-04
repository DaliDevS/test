<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220904163353 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE result_entity ADD draw_index_id INT NOT NULL');
        $this->addSql('ALTER TABLE result_entity ADD CONSTRAINT FK_EAB77F34C07A1D97 FOREIGN KEY (draw_index_id) REFERENCES draw_entity (id)');
        $this->addSql('CREATE INDEX IDX_EAB77F34C07A1D97 ON result_entity (draw_index_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE result_entity DROP FOREIGN KEY FK_EAB77F34C07A1D97');
        $this->addSql('DROP INDEX IDX_EAB77F34C07A1D97 ON result_entity');
        $this->addSql('ALTER TABLE result_entity DROP draw_index_id');
    }
}
