<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Detailsworkflow Entity
 *
 * @property int $id
 * @property int $idworkflow
 * @property int $rolecmd
 * @property string $action
 * @property int $numsequence
 * @property int $iduser
 * @property \Cake\I18n\DateTime $date
 */
class Detailsworkflow extends Entity
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
        'idworkflow' => true,
        'rolecmd' => true,
        'action' => true,
        'numsequence' => true,
        'iduser' => true,
        'date' => true,
    ];
}
