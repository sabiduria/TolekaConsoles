<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Transporteur Entity
 *
 * @property int $id
 * @property string $nomtrans
 * @property string $emailtrans
 * @property string $teltrans
 * @property string $pays
 * @property \Cake\I18n\DateTime $date
 * @property int $iduser
 * @property string $statut
 */
class Transporteur extends Entity
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
        'nomtrans' => true,
        'emailtrans' => true,
        'teltrans' => true,
        'pays' => true,
        'date' => true,
        'iduser' => true,
        'statut' => true,
    ];
}
