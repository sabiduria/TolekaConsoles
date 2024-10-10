<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Logdb Entity
 *
 * @property int $id
 * @property string $table
 * @property string $type
 * @property \Cake\I18n\DateTime $date
 * @property int $iduser
 */
class Logdb extends Entity
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
        'table' => true,
        'type' => true,
        'date' => true,
        'iduser' => true,
    ];
}
