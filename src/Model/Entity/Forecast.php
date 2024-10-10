<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Forecast Entity
 *
 * @property int $id
 * @property string $moisgestion
 * @property int $scancu
 * @property int $scancoh
 * @property int $charcu
 * @property int $charcoh
 * @property int $doccu
 * @property int $doccoh
 * @property int $dispcu
 * @property int $dispcoh
 * @property int $iduser
 * @property \Cake\I18n\DateTime $date
 */
class Forecast extends Entity
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
        'moisgestion' => true,
        'scancu' => true,
        'scancoh' => true,
        'charcu' => true,
        'charcoh' => true,
        'doccu' => true,
        'doccoh' => true,
        'dispcu' => true,
        'dispcoh' => true,
        'iduser' => true,
        'date' => true,
    ];
}
