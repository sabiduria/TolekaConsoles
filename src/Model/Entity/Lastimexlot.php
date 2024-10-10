<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Lastimexlot Entity
 *
 * @property int $id
 * @property string $produit
 * @property string $unit
 * @property string $lastimexlot
 * @property int $newlastnum
 * @property int $used
 */
class Lastimexlot extends Entity
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
        'produit' => true,
        'unit' => true,
        'lastimexlot' => true,
        'newlastnum' => true,
        'used' => true,
    ];
}
