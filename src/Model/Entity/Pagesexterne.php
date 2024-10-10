<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pagesexterne Entity
 *
 * @property int $id
 * @property string $details
 * @property string $detailsfr
 * @property int $idcategorie
 * @property int $iduser
 * @property \Cake\I18n\DateTime $date
 */
class Pagesexterne extends Entity
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
        'details' => true,
        'detailsfr' => true,
        'idcategorie' => true,
        'iduser' => true,
        'date' => true,
    ];
}
