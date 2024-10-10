<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Suggestion Entity
 *
 * @property int $id
 * @property string $suggestion
 * @property int $iduser
 * @property \Cake\I18n\DateTime $date
 * @property string $reponse
 * @property int $iduser2
 * @property \Cake\I18n\DateTime $date2
 * @property string $statut
 */
class Suggestion extends Entity
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
        'suggestion' => true,
        'iduser' => true,
        'date' => true,
        'reponse' => true,
        'iduser2' => true,
        'date2' => true,
        'statut' => true,
    ];
}
