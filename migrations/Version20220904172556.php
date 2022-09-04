<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220904172556 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE entity_result DROP FOREIGN KEY FK_D7A77F9E6BD44391');
        $this->addSql('DROP INDEX IDX_D7A77F9E6BD44391 ON entity_result');
        $this->addSql('ALTER TABLE entity_result CHANGE draw_index draw_id INT NOT NULL');
        $this->addSql('ALTER TABLE entity_result ADD CONSTRAINT FK_D7A77F9E6FC5C1B8 FOREIGN KEY (draw_id) REFERENCES entity_draw (id)');
        $this->addSql('CREATE INDEX IDX_D7A77F9E6FC5C1B8 ON entity_result (draw_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE entity_result DROP FOREIGN KEY FK_D7A77F9E6FC5C1B8');
        $this->addSql('DROP INDEX IDX_D7A77F9E6FC5C1B8 ON entity_result');
        $this->addSql('ALTER TABLE entity_result CHANGE draw_id draw_index INT NOT NULL');
        $this->addSql('ALTER TABLE entity_result ADD CONSTRAINT FK_D7A77F9E6BD44391 FOREIGN KEY (draw_index) REFERENCES entity_draw (id)');
        $this->addSql('CREATE INDEX IDX_D7A77F9E6BD44391 ON entity_result (draw_index)');
    }
}
