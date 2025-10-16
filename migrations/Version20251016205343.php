<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251016205343 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE place_equipement (place_id INT NOT NULL, equipement_id INT NOT NULL, INDEX IDX_967450FBDA6A219 (place_id), INDEX IDX_967450FB806F0F5C (equipement_id), PRIMARY KEY(place_id, equipement_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE place_equipement ADD CONSTRAINT FK_967450FBDA6A219 FOREIGN KEY (place_id) REFERENCES place (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE place_equipement ADD CONSTRAINT FK_967450FB806F0F5C FOREIGN KEY (equipement_id) REFERENCES equipement (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE place_equipement DROP FOREIGN KEY FK_967450FBDA6A219');
        $this->addSql('ALTER TABLE place_equipement DROP FOREIGN KEY FK_967450FB806F0F5C');
        $this->addSql('DROP TABLE place_equipement');
    }
}
