<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Formation Entity
 *
 * @property int $id
 * @property int $iduser
 * @property string $nomformation
 * @property string $periode
 * @property string $etablissement
 * @property string $lieu
 * @property string $pieceobtenue
 * @property string $nompiece
 * @property string $date
 */
class Formation extends Entity
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
        'nomformation' => true,
        'periode' => true,
        'etablissement' => true,
        'lieu' => true,
        'pieceobtenue' => true,
        'nompiece' => true,
        'date' => true,
    ];
}
