<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Scansecurityseal Entity
 *
 * @property int $id
 * @property string $numlot
 * @property string $imexlot
 * @property string $sealsscanned
 * @property string $operator
 * @property \Cake\I18n\DateTime $date
 */
class Scansecurityseal extends Entity
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
        'numlot' => true,
        'imexlot' => true,
        'sealsscanned' => true,
        'operator' => true,
        'date' => true,
    ];
}
