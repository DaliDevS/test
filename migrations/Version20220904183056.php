<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220904183056 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE entity_result DROP FOREIGN KEY FK_D7A77F9EC07A1D97');
        $this->addSql('DROP INDEX IDX_D7A77F9EC07A1D97 ON entity_result');
        $this->addSql('ALTER TABLE entity_result DROP draw_index_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE entity_result ADD draw_index_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE entity_result ADD CONSTRAINT FK_D7A77F9EC07A1D97 FOREIGN KEY (draw_index_id) REFERENCES entity_draw (id)');
        $this->addSql('CREATE INDEX IDX_D7A77F9EC07A1D97 ON entity_result (draw_index_id)');
    }
}
