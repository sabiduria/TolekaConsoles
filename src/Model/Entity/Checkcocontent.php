<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Checkcocontent Entity
 *
 * @property int $id
 * @property string $imexlot
 * @property string $bagid
 * @property float $poids
 * @property float $h2o
 * @property float $co
 * @property float $vpoids
 * @property float $vh2o
 * @property float $vco
 * @property float $produith2o
 * @property float $produitco
 * @property \Cake\I18n\DateTime $date
 * @property int $iduser
 * @property string $loadperiod
 */
class Checkcocontent extends Entity
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
        'imexlot' => true,
        'bagid' => true,
        'poids' => true,
        'h2o' => true,
        'co' => true,
        'vpoids' => true,
        'vh2o' => true,
        'vco' => true,
        'produith2o' => true,
        'produitco' => true,
        'date' => true,
        'iduser' => true,
        'loadperiod' => true,
    ];
}
