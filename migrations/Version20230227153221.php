<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230227153221 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE livres');
        $this->addSql('ALTER TABLE user ADD is_verified TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE livres (id INT AUTO_INCREMENT NOT NULL, Ordre INT DEFAULT NULL, Auteur VARCHAR(75) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, Titre VARCHAR(182) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, Editeur VARCHAR(63) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, Poche VARCHAR(5) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, Année Edition VARCHAR(4) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, code ISBN VARCHAR(37) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, Distinction VARCHAR(190) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, Collection VARCHAR(46) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, Numéro VARCHAR(11) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, Tome VARCHAR(9) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, Cycle VARCHAR(48) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, Genre VARCHAR(19) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, S/ Genre VARCHAR(25) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, Note Cath VARCHAR(188) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, Note Bruno VARCHAR(196) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, Commentaires VARCHAR(373) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, Nationalité VARCHAR(23) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, Titre origine VARCHAR(138) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, Traducteur VARCHAR(77) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, Edition Originale VARCHAR(28) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, Date VARCHAR(21) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, Emprunteur VARCHAR(15) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, Date pris VARCHAR(10) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, Date retour VARCHAR(10) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, Fiche VARCHAR(2) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, Mots_clefs VARCHAR(87) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE user DROP is_verified');
    }
}
