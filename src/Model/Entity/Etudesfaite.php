<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Etudesfaite Entity
 *
 * @property int $id
 * @property int $iduser
 * @property string $periode
 * @property string $ecole
 * @property string $classes
 * @property string $ville
 * @property string $pieceobtenue
 * @property string $dateenregistrement
 */
class Etudesfaite extends Entity
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
        'periode' => true,
        'ecole' => true,
        'classes' => true,
        'ville' => true,
        'pieceobtenue' => true,
        'dateenregistrement' => true,
    ];
}
