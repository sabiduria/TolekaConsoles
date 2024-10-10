<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ImagesSafetytopic Entity
 *
 * @property int $id
 * @property int $idtopic
 * @property string $image
 * @property int $iduser
 * @property \Cake\I18n\DateTime $date
 */
class ImagesSafetytopic extends Entity
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
        'idtopic' => true,
        'image' => true,
        'iduser' => true,
        'date' => true,
    ];
}
