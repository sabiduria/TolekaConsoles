<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Camion Entity
 *
 * @property int $id
 * @property int $trans
 * @property int $ch
 * @property string $marque
 * @property string $type
 * @property string $horse
 * @property string $trailer1
 * @property string $trailer2
 * @property float $tonnage
 * @property string $couleur
 * @property string $statut
 * @property \Cake\I18n\DateTime $date
 * @property int $iduser
 */
class Camion extends Entity
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
        'trans' => true,
        'ch' => true,
        'marque' => true,
        'type' => true,
        'horse' => true,
        'trailer1' => true,
        'trailer2' => true,
        'tonnage' => true,
        'couleur' => true,
        'statut' => true,
        'date' => true,
        'iduser' => true,
    ];
}
