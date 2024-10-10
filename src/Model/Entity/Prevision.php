<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Prevision Entity
 *
 * @property int $id
 * @property string $mois
 * @property string $produit
 * @property int $tonnagemens
 * @property int $tonnagejour
 * @property int $camionsmens
 * @property int $camionsjour
 */
class Prevision extends Entity
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
        'mois' => true,
        'produit' => true,
        'tonnagemens' => true,
        'tonnagejour' => true,
        'camionsmens' => true,
        'camionsjour' => true,
    ];
}
