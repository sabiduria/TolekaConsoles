<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Destination Entity
 *
 * @property int $id
 * @property string $pays
 * @property string $destination
 * @property string $corridor
 * @property string $codeprea
 * @property string $produit
 * @property float $tonnagerequis
 * @property float $tonnageenvoye
 * @property float $tonnagerestant
 * @property \Cake\I18n\DateTime $date
 * @property int $iduser
 * @property string $statut
 * @property string $consignee
 */
class Destination extends Entity
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
        'pays' => true,
        'destination' => true,
        'corridor' => true,
        'codeprea' => true,
        'produit' => true,
        'tonnagerequis' => true,
        'tonnageenvoye' => true,
        'tonnagerestant' => true,
        'date' => true,
        'iduser' => true,
        'statut' => true,
        'consignee' => true,
    ];
}
