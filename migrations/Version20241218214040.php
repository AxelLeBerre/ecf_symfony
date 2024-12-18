<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241218214040 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE book_loan CHANGE date_emprunt date_emprunt DATE DEFAULT NULL, CHANGE date_retour_prevue date_retour_prevue DATE DEFAULT NULL, CHANGE date_retour_reelle date_retour_reelle DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE book_review CHANGE date_commentaire date_commentaire DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE loans CHANGE date_retour_prevue date_retour_prevue DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE subscription CHANGE date_fin date_fin DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE book_loan CHANGE date_emprunt date_emprunt DATE DEFAULT \'NULL\', CHANGE date_retour_prevue date_retour_prevue DATE DEFAULT \'NULL\', CHANGE date_retour_reelle date_retour_reelle DATE DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE book_review CHANGE date_commentaire date_commentaire DATE DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE loans CHANGE date_retour_prevue date_retour_prevue DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT \'NULL\' COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE subscription CHANGE date_fin date_fin DATE DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT NOT NULL COLLATE `utf8mb4_bin`');
    }
}
