<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Kcclabresult Entity
 *
 * @property int $id
 * @property string $composite
 * @property float $co
 * @property float $al
 * @property float $ca
 * @property float $cu
 * @property float $fe
 * @property float $mg
 * @property float $mn
 * @property float $ni
 * @property float $zn
 * @property float $u
 * @property float $h2o
 * @property \Cake\I18n\DateTime $date
 * @property int $iduser
 */
class Kcclabresult extends Entity
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
        'composite' => true,
        'co' => true,
        'al' => true,
        'ca' => true,
        'cu' => true,
        'fe' => true,
        'mg' => true,
        'mn' => true,
        'ni' => true,
        'zn' => true,
        'u' => true,
        'h2o' => true,
        'date' => true,
        'iduser' => true,
    ];
}
