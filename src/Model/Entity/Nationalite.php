<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Nationalite Entity
 *
 * @property int $id
 * @property string $nationalite
 * @property string $langue
 * @property string $statut
 * @property int $iduser
 * @property \Cake\I18n\DateTime $datemiseajour
 */
class Nationalite extends Entity
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
        'nationalite' => true,
        'langue' => true,
        'statut' => true,
        'iduser' => true,
        'datemiseajour' => true,
    ];
}
