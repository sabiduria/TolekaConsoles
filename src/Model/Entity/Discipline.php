<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Discipline Entity
 *
 * @property int $id
 * @property string $typesanction
 * @property string $matricule
 * @property string $nomagent
 * @property string $motif
 * @property \Cake\I18n\Date $datedebut
 * @property \Cake\I18n\Date $datefin
 * @property string $document
 * @property int $iduser
 * @property \Cake\I18n\DateTime $date
 */
class Discipline extends Entity
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
        'typesanction' => true,
        'matricule' => true,
        'nomagent' => true,
        'motif' => true,
        'datedebut' => true,
        'datefin' => true,
        'document' => true,
        'iduser' => true,
        'date' => true,
    ];
}
