<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Mouvementstock Entity
 *
 * @property int $id
 * @property \Cake\I18n\DateTime $date
 * @property string $transaction
 * @property int $iditem
 * @property string $item
 * @property int $qteinit
 * @property int $qtetrans
 * @property int $qtefin
 */
class Mouvementstock extends Entity
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
        'date' => true,
        'transaction' => true,
        'iditem' => true,
        'item' => true,
        'qteinit' => true,
        'qtetrans' => true,
        'qtefin' => true,
    ];
}
