<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cohlot Entity
 *
 * @property int $id
 * @property int $idtrip
 * @property string $numlot
 * @property string $numimex
 * @property string $spec
 * @property \Cake\I18n\DateTime $date
 * @property string $destination
 * @property string $paysdest
 * @property string $corridor
 * @property string $horse
 * @property string $trailer1
 * @property string $trailer2
 * @property string $transporteur
 * @property string $moisgestion
 * @property string $statut
 * @property int $iduser
 * @property float $tonnage
 * @property float $tonnageload
 * @property string $sealdgda
 * @property string $numbp
 * @property string $produit
 * @property string $physicalgrade
 * @property string $chemicalgrade
 * @property string $unite
 * @property string $numdc
 * @property int $year
 * @property string $sealsecurite
 * @property bool $synced
 *
 * @property \App\Model\Entity\Affectation[] $affectations
 */
class Cohlot extends Entity
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
        'idtrip' => true,
        'numlot' => true,
        'numimex' => true,
        'spec' => true,
        'date' => true,
        'destination' => true,
        'paysdest' => true,
        'corridor' => true,
        'horse' => true,
        'trailer1' => true,
        'trailer2' => true,
        'transporteur' => true,
        'moisgestion' => true,
        'statut' => true,
        'iduser' => true,
        'tonnage' => true,
        'tonnageload' => true,
        'sealdgda' => true,
        'numbp' => true,
        'produit' => true,
        'physicalgrade' => true,
        'chemicalgrade' => true,
        'unite' => true,
        'numdc' => true,
        'year' => true,
        'sealsecurite' => true,
        'synced' => true,
        'affectations' => true,
    ];
}
