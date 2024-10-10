<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Checkingsticker Entity
 *
 * @property int $id
 * @property string $lotnumber
 * @property string $imexlot
 * @property float $tonnageload
 * @property int $items
 * @property string $horse
 * @property string $trailers
 * @property string $comment
 * @property string $report
 * @property int $idtrip
 * @property \Cake\I18n\DateTime $date
 * @property int $iduser
 * @property string $inspecteur
 * @property string $moisgestion
 */
class Checkingsticker extends Entity
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
        'lotnumber' => true,
        'imexlot' => true,
        'tonnageload' => true,
        'items' => true,
        'horse' => true,
        'trailers' => true,
        'comment' => true,
        'report' => true,
        'idtrip' => true,
        'date' => true,
        'iduser' => true,
        'inspecteur' => true,
        'moisgestion' => true,
    ];
}
