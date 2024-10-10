<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ci Entity
 *
 * @property int $id
 * @property string $lotnumber
 * @property string $numimex
 * @property float $cost
 * @property string $horse
 * @property string $transporter
 * @property string $destination
 * @property \Cake\I18n\DateTime $date
 */
class Ci extends Entity
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
        'lotnumber' => true,
        'numimex' => true,
        'cost' => true,
        'horse' => true,
        'transporter' => true,
        'destination' => true,
        'date' => true,
    ];
}
