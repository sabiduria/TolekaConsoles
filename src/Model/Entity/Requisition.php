<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Requisition Entity
 *
 * @property int $id
 * @property int $iduser
 * @property string $item
 * @property string $motif
 * @property \Cake\I18n\DateTime $date
 * @property int $qtedem
 * @property int $qteac
 * @property int $idac
 * @property \Cake\I18n\DateTime $dateac
 * @property string $statutac
 * @property int $qteliv
 * @property int $idliv
 * @property \Cake\I18n\DateTime $dateliv
 * @property string $commentliv
 * @property string $commentac
 * @property string $statut
 */
class Requisition extends Entity
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
        'iduser' => true,
        'item' => true,
        'motif' => true,
        'date' => true,
        'qtedem' => true,
        'qteac' => true,
        'idac' => true,
        'dateac' => true,
        'statutac' => true,
        'qteliv' => true,
        'idliv' => true,
        'dateliv' => true,
        'commentliv' => true,
        'commentac' => true,
        'statut' => true,
    ];
}
