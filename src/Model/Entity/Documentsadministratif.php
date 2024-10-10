<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Documentsadministratif Entity
 *
 * @property int $id
 * @property int $idemp
 * @property string $matricule
 * @property string $document
 * @property string $type
 * @property string $categorie
 * @property string $commentaire
 * @property int $iduser
 * @property \Cake\I18n\DateTime $datemiseajour
 */
class Documentsadministratif extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'idemp' => true,
        'matricule' => true,
        'document' => true,
        'type' => true,
        'categorie' => true,
        'commentaire' => true,
        'iduser' => true,
        'datemiseajour' => true,
    ];
}
