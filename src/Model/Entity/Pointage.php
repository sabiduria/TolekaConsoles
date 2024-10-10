<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pointage Entity
 *
 * @property int $id
 * @property string $codepointage
 * @property string $description
 * @property string $type
 * @property float $coefficient
 * @property int $iduser
 * @property \Cake\I18n\DateTime $datemiseajour
 * @property string $descriptionen
 */
class Pointage extends Entity
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
        'codepointage' => true,
        'description' => true,
        'type' => true,
        'coefficient' => true,
        'iduser' => true,
        'datemiseajour' => true,
        'descriptionen' => true,
    ];
}
