<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Detailslot Entity
 *
 * @property int $id
 * @property string $numlot
 * @property int $idbag
 * @property string $bagid
 * @property string $h20
 * @property string $co
 * @property string $u
 * @property string $mg
 * @property string $mn
 * @property string $ni
 * @property string $fe
 * @property string $ca
 * @property string $si
 * @property string $al
 * @property string $cu
 * @property string $cocont
 * @property string $spec
 * @property int $user
 * @property \Cake\I18n\DateTime $datecrea
 * @property string $dateprod
 * @property string $poids
 * @property string $composite
 * @property string $zn
 */
class Detailslot extends Entity
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
        'idbag' => true,
        'bagid' => true,
        'h20' => true,
        'co' => true,
        'u' => true,
        'mg' => true,
        'mn' => true,
        'ni' => true,
        'fe' => true,
        'ca' => true,
        'si' => true,
        'al' => true,
        'cu' => true,
        'cocont' => true,
        'spec' => true,
        'user' => true,
        'datecrea' => true,
        'dateprod' => true,
        'poids' => true,
        'composite' => true,
        'zn' => true,
    ];
}
