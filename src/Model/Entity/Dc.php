<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Dc Entity
 *
 * @property int $id
 * @property int $num
 * @property string $numdc
 * @property string $numbp
 * @property string $licence
 * @property string $produit
 * @property string $tranche
 * @property \Cake\I18n\DateTime $date
 * @property string $iduser
 * @property string $statut
 * @property int $tonnage
 * @property int $nbitems
 * @property string $liendc
 * @property float $tonnagerestant
 * @property float $tonnageutilise
 * @property int $nbpaquets
 * @property int $seuil
 * @property string $numdckcc
 * @property string $numtransport
 */
class Dc extends Entity
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
        'num' => true,
        'numdc' => true,
        'numbp' => true,
        'licence' => true,
        'produit' => true,
        'tranche' => true,
        'date' => true,
        'iduser' => true,
        'statut' => true,
        'tonnage' => true,
        'nbitems' => true,
        'liendc' => true,
        'tonnagerestant' => true,
        'tonnageutilise' => true,
        'nbpaquets' => true,
        'seuil' => true,
        'numdckcc' => true,
        'numtransport' => true,
    ];
}
