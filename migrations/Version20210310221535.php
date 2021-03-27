<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210310221535 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE competences_competences_categories (competences_id INT NOT NULL, competences_categories_id INT NOT NULL, INDEX IDX_B9E23C88A660B158 (competences_id), INDEX IDX_B9E23C88F7DBD7D1 (competences_categories_id), PRIMARY KEY(competences_id, competences_categories_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE competences_competences_categories ADD CONSTRAINT FK_B9E23C88A660B158 FOREIGN KEY (competences_id) REFERENCES competences (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE competences_competences_categories ADD CONSTRAINT FK_B9E23C88F7DBD7D1 FOREIGN KEY (competences_categories_id) REFERENCES competences_categories (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE competences DROP FOREIGN KEY FK_DB2077CED33DD65C');
        $this->addSql('DROP INDEX IDX_DB2077CED33DD65C ON competences');
        $this->addSql('ALTER TABLE competences DROP competence_categories_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE competences_competences_categories');
        $this->addSql('ALTER TABLE competences ADD competence_categories_id INT NOT NULL');
        $this->addSql('ALTER TABLE competences ADD CONSTRAINT FK_DB2077CED33DD65C FOREIGN KEY (competence_categories_id) REFERENCES competences_categories (id)');
        $this->addSql('CREATE INDEX IDX_DB2077CED33DD65C ON competences (competence_categories_id)');
    }
}
