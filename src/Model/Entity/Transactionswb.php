<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Transactionswb Entity
 *
 * @property int $id
 * @property int $idtrip
 * @property string $wbop
 * @property \Cake\I18n\DateTime $date
 * @property string $typetrans
 * @property float $tare
 * @property int $poidsbrut
 * @property int $poidsnet
 * @property int $nbitems
 * @property string $decision
 * @property string $wbticket
 * @property int $nbpass
 * @property int $variance
 * @property float $purvar
 * @property string $lienwbticket
 */
class Transactionswb extends Entity
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
        'wbop' => true,
        'date' => true,
        'typetrans' => true,
        'tare' => true,
        'poidsbrut' => true,
        'poidsnet' => true,
        'nbitems' => true,
        'decision' => true,
        'wbticket' => true,
        'nbpass' => true,
        'variance' => true,
        'purvar' => true,
        'lienwbticket' => true,
    ];
}
