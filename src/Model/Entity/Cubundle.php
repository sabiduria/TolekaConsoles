<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cubundle Entity
 *
 * @property int $id
 * @property string $dateprod
 * @property string $unit
 * @property string $lotnumber
 * @property string $imexlot
 * @property string $bundlecode
 * @property string $composite
 * @property float $grossweight
 * @property float $netweight
 * @property string $visualgrade
 * @property string $chemicalgrade
 * @property string $finalgrade
 * @property string $location
 * @property string $charge
 * @property \Cake\I18n\Date $dateloaded
 * @property \Cake\I18n\DateTime $date
 * @property int $iduser
 * @property string $seal1
 * @property string $seal2
 * @property \Cake\I18n\Date $dateadded
 * @property \Cake\I18n\Date $datechecked
 * @property bool $synced
 *
 * @property \App\Model\Entity\AdminSync[] $admin_sync
 * @property \App\Model\Entity\DeviceSync[] $device_sync
 */
class Cubundle extends Entity
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
        'dateprod' => true,
        'unit' => true,
        'lotnumber' => true,
        'imexlot' => true,
        'bundlecode' => true,
        'composite' => true,
        'grossweight' => true,
        'netweight' => true,
        'visualgrade' => true,
        'chemicalgrade' => true,
        'finalgrade' => true,
        'location' => true,
        'charge' => true,
        'dateloaded' => true,
        'date' => true,
        'iduser' => true,
        'seal1' => true,
        'seal2' => true,
        'dateadded' => true,
        'datechecked' => true,
        'synced' => true,
        'admin_sync' => true,
        'device_sync' => true,
    ];
}
