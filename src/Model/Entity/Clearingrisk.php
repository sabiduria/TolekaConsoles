<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Clearingrisk Entity
 *
 * @property int $id
 * @property string $lotnumber
 * @property string $imexlot
 * @property \Cake\I18n\DateTime $riskdate
 * @property string $riskop
 * @property string $commentrisk
 * @property string $statutrisk
 */
class Clearingrisk extends Entity
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
        'riskdate' => true,
        'riskop' => true,
        'commentrisk' => true,
        'statutrisk' => true,
    ];
}
