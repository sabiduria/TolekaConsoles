<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Classification Entity
 *
 * @property int $id
 * @property string $classe
 * @property string $description
 * @property int $iduser
 * @property \Cake\I18n\DateTime $datemiseajour
 */
class Classification extends Entity
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
        'classe' => true,
        'description' => true,
        'iduser' => true,
        'datemiseajour' => true,
    ];
}
