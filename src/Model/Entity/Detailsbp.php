<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Detailsbp Entity
 *
 * @property int $id
 * @property int $idbp
 * @property string $numbp
 * @property string $numlot
 * @property string $horse
 * @property string $trailer1
 * @property string $trailer2
 * @property string $transporteur
 * @property string $chauffeur
 * @property string $passeport
 * @property string $nationalite
 * @property int $nbpaquets
 * @property float $poidsnet
 * @property float $poidsbrut
 * @property string $sealdgda
 * @property int $iduser
 * @property \Cake\I18n\DateTime $date
 */
class Detailsbp extends Entity
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
        'idbp' => true,
        'numbp' => true,
        'numlot' => true,
        'horse' => true,
        'trailer1' => true,
        'trailer2' => true,
        'transporteur' => true,
        'chauffeur' => true,
        'passeport' => true,
        'nationalite' => true,
        'nbpaquets' => true,
        'poidsnet' => true,
        'poidsbrut' => true,
        'sealdgda' => true,
        'iduser' => true,
        'date' => true,
    ];
}
