<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Lc Entity
 *
 * @property int $id
 * @property int $year
 * @property string $month
 * @property string $pk
 * @property \Cake\I18n\DateTime $date
 * @property int $iduser
 */
class Lc extends Entity
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
        'year' => true,
        'month' => true,
        'pk' => true,
        'date' => true,
        'iduser' => true,
    ];
}
