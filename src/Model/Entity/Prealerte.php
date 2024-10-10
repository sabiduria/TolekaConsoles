<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Prealerte Entity
 *
 * @property int $id
 * @property int $camion
 * @property int $destination
 * @property string $produit
 * @property \Cake\I18n\Date $eta
 * @property string $position
 * @property \Cake\I18n\Date $datearrivee
 * @property \Cake\I18n\DateTime $date
 * @property int $iduser
 * @property string $statut
 * @property string $commentaire
 * @property string $moisgestion
 * @property string $loadingplan
 * @property string $destinationg
 * @property string $exitpoint
 */
class Prealerte extends Entity
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
        'camion' => true,
        'destination' => true,
        'produit' => true,
        'eta' => true,
        'position' => true,
        'datearrivee' => true,
        'date' => true,
        'iduser' => true,
        'statut' => true,
        'commentaire' => true,
        'moisgestion' => true,
        'loadingplan' => true,
        'destinationg' => true,
        'exitpoint' => true,
    ];
}
