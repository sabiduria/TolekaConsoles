<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Reconditionnement Entity
 *
 * @property int $id
 * @property string $bagid
 * @property string $zone
 * @property string $description
 * @property string $statut
 * @property \Cake\I18n\DateTime $dateid
 * @property int $iduser
 * @property \Cake\I18n\DateTime $dateok
 * @property int $iduser2
 * @property string $produit
 */
class Reconditionnement extends Entity
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
        'zone' => true,
        'description' => true,
        'statut' => true,
        'dateid' => true,
        'iduser' => true,
        'dateok' => true,
        'iduser2' => true,
        'produit' => true,
    ];
}
