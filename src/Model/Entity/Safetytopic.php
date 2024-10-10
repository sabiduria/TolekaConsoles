<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Safetytopic Entity
 *
 * @property int $id
 * @property string $sujet
 * @property string $commentaires
 * @property string $lieu
 * @property \Cake\I18n\Date $datetopic
 * @property int $iduser
 * @property \Cake\I18n\DateTime $date
 */
class Safetytopic extends Entity
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
        'sujet' => true,
        'commentaires' => true,
        'lieu' => true,
        'datetopic' => true,
        'iduser' => true,
        'date' => true,
    ];
}
