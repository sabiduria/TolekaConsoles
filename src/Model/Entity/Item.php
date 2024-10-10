<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Item Entity
 *
 * @property int $id
 * @property string $itemname
 * @property int $quantity
 * @property int $nbreitems
 * @property float $length
 * @property float $width
 * @property float $height
 * @property float $cbm
 * @property float $averageweightperpackage
 * @property float $packagetotalweight
 * @property float $netweightperpackage
 * @property float $itemnetweight
 * @property string $nature
 * @property string $idshop
 * @property int $idstore
 * @property int $idcl
 * @property \Cake\I18n\Date $datereceipt
 * @property \Cake\I18n\DateTime $daterecord
 * @property string $shelf
 * @property int $ray
 * @property string $statut
 * @property int $iduser
 * @property \Cake\I18n\DateTime $date
 * @property int $iduser2
 * @property \Cake\I18n\DateTime $miseajour
 */
class Item extends Entity
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
        'itemname' => true,
        'quantity' => true,
        'nbreitems' => true,
        'length' => true,
        'width' => true,
        'height' => true,
        'cbm' => true,
        'averageweightperpackage' => true,
        'packagetotalweight' => true,
        'netweightperpackage' => true,
        'itemnetweight' => true,
        'nature' => true,
        'idshop' => true,
        'idstore' => true,
        'idcl' => true,
        'datereceipt' => true,
        'daterecord' => true,
        'shelf' => true,
        'ray' => true,
        'statut' => true,
        'iduser' => true,
        'date' => true,
        'iduser2' => true,
        'miseajour' => true,
    ];
}
