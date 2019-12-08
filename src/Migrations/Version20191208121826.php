<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191208121826 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE these ADD lien_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE these ADD CONSTRAINT FK_4334D8D7EDAAC352 FOREIGN KEY (lien_id) REFERENCES ecole (id)');
        $this->addSql('CREATE INDEX IDX_4334D8D7EDAAC352 ON these (lien_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE these DROP FOREIGN KEY FK_4334D8D7EDAAC352');
        $this->addSql('DROP INDEX IDX_4334D8D7EDAAC352 ON these');
        $this->addSql('ALTER TABLE these DROP lien_id');
    }
}
