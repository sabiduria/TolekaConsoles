<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tach Entity
 *
 * @property int $id
 * @property string $description
 * @property string $statut
 * @property int $idpj
 * @property \Cake\I18n\Date $datelimite
 * @property int $assignea
 * @property int $iduser
 * @property int $iduser2
 * @property \Cake\I18n\DateTime $date
 * @property \Cake\I18n\DateTime $datemiseajour
 * @property string $commentaireexec
 * @property \Cake\I18n\DateTime $datecomexec
 * @property string $conclusion
 * @property \Cake\I18n\DateTime $dateconcl
 * @property float $depenseusd
 * @property float $revenus
 * @property float $gainusd
 * @property int $position
 */
class Tach extends Entity
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
        'description' => true,
        'statut' => true,
        'idpj' => true,
        'datelimite' => true,
        'assignea' => true,
        'iduser' => true,
        'iduser2' => true,
        'date' => true,
        'datemiseajour' => true,
        'commentaireexec' => true,
        'datecomexec' => true,
        'conclusion' => true,
        'dateconcl' => true,
        'depenseusd' => true,
        'revenus' => true,
        'gainusd' => true,
        'position' => true,
    ];
}
