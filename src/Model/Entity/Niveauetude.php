<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Niveauetude Entity
 *
 * @property int $id
 * @property string $niveau
 * @property string $description
 * @property int $iduser
 * @property \Cake\I18n\DateTime $datemiseajour
 */
class Niveauetude extends Entity
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
        'niveau' => true,
        'description' => true,
        'iduser' => true,
        'datemiseajour' => true,
    ];
}
