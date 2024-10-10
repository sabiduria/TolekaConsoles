<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Photosbag Entity
 *
 * @property int $id
 * @property string $bagid
 * @property string $photo
 * @property int $iduser
 * @property \Cake\I18n\DateTime $date
 */
class Photosbag extends Entity
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
        'bagid' => true,
        'photo' => true,
        'iduser' => true,
        'date' => true,
    ];
}
