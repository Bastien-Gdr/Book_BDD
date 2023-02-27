<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230227185203 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE books (id INT AUTO_INCREMENT NOT NULL, ordre INT DEFAULT NULL, auteur VARCHAR(255) DEFAULT NULL, titre VARCHAR(255) DEFAULT NULL, editeur VARCHAR(255) DEFAULT NULL, poche TINYINT(1) DEFAULT NULL, annee INT DEFAULT NULL, isbn INT DEFAULT NULL, distinction LONGTEXT DEFAULT NULL, collection VARCHAR(255) DEFAULT NULL, numero VARCHAR(255) DEFAULT NULL, tome INT DEFAULT NULL, cycle LONGTEXT DEFAULT NULL, genre VARCHAR(255) DEFAULT NULL, sous_genre VARCHAR(255) DEFAULT NULL, note_cath LONGTEXT DEFAULT NULL, note_bruno LONGTEXT DEFAULT NULL, commentaires LONGTEXT DEFAULT NULL, nationalite VARCHAR(255) DEFAULT NULL, titre_original VARCHAR(255) DEFAULT NULL, date INT DEFAULT NULL, emprunteur VARCHAR(255) DEFAULT NULL, date_debut DATE DEFAULT NULL, date_fin DATE DEFAULT NULL, fiche VARCHAR(255) DEFAULT NULL, mots_clefs LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE books');
    }
}
