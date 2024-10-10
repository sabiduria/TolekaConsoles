<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cohbag Entity
 *
 * @property int $id
 * @property string $bagid
 * @property string $composite
 * @property \Cake\I18n\Date $dateprod
 * @property float $poids
 * @property string $localisation
 * @property string $h2o
 * @property float $co
 * @property float $co_cont
 * @property float $uranium
 * @property float $mg
 * @property float $fe
 * @property float $zn
 * @property float $ca
 * @property float $mn
 * @property float $ni
 * @property float $al
 * @property float $cu
 * @property string $charge
 * @property string $spec
 * @property string $lotnumber
 * @property string $imexlot
 * @property \Cake\I18n\Date $dateload
 * @property \Cake\I18n\DateTime $dateact
 * @property int $iduser
 * @property float $vpoids
 * @property float $vh2o
 * @property float $vco
 * @property float $produith2o
 * @property float $produitco
 * @property string $seal
 * @property \Cake\I18n\Date $dateadded
 * @property \Cake\I18n\Date $datechecked
 * @property bool $synced
 */
class Cohbag extends Entity
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
        'composite' => true,
        'dateprod' => true,
        'poids' => true,
        'localisation' => true,
        'h2o' => true,
        'co' => true,
        'co_cont' => true,
        'uranium' => true,
        'mg' => true,
        'fe' => true,
        'zn' => true,
        'ca' => true,
        'mn' => true,
        'ni' => true,
        'al' => true,
        'cu' => true,
        'charge' => true,
        'spec' => true,
        'lotnumber' => true,
        'imexlot' => true,
        'dateload' => true,
        'dateact' => true,
        'iduser' => true,
        'vpoids' => true,
        'vh2o' => true,
        'vco' => true,
        'produith2o' => true,
        'produitco' => true,
        'seal' => true,
        'dateadded' => true,
        'datechecked' => true,
        'synced' => true,
    ];
}
