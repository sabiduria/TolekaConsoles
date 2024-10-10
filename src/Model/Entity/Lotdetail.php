<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Lotdetail Entity
 *
 * @property int $id
 * @property int $lotid
 * @property int $bagid
 * @property string $bagnumber
 * @property float $poids
 * @property float $h2o
 * @property float $co
 * @property float $fe
 * @property float $ca
 * @property float $mg
 * @property float $ni
 * @property float $mn
 * @property float $si
 * @property float $al
 * @property float $cu
 * @property string $statut
 * @property \Cake\I18n\DateTime $date
 * @property int $iduser
 */
class Lotdetail extends Entity
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
        'lotid' => true,
        'bagid' => true,
        'bagnumber' => true,
        'poids' => true,
        'h2o' => true,
        'co' => true,
        'fe' => true,
        'ca' => true,
        'mg' => true,
        'ni' => true,
        'mn' => true,
        'si' => true,
        'al' => true,
        'cu' => true,
        'statut' => true,
        'date' => true,
        'iduser' => true,
    ];
}
