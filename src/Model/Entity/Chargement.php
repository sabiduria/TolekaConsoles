<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Chargement Entity
 *
 * @property int $id
 * @property string $numlot
 * @property string $loadassistant
 * @property string $loadhelper1
 * @property string $loadhelper2
 * @property string $operateur1
 * @property string $operateur2
 * @property \Cake\I18n\DateTime $date
 * @property string $user
 */
class Chargement extends Entity
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
        'loadassistant' => true,
        'loadhelper1' => true,
        'loadhelper2' => true,
        'operateur1' => true,
        'operateur2' => true,
        'date' => true,
        'user' => true,
    ];
}
