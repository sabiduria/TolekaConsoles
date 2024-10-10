<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DeviceSync Entity
 *
 * @property int $id
 * @property string $name
 * @property string $imei
 * @property int $cohbags_id
 * @property int $cohlots_id
 * @property int $cubundle_id
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 * @property string $createdby
 * @property string $modifiedby
 * @property bool $deleted
 *
 * @property \App\Model\Entity\Cohbag $cohbag
 * @property \App\Model\Entity\Cohlot $cohlot
 */
class DeviceSync extends Entity
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
        'name' => true,
        'imei' => true,
        'cohbags_id' => true,
        'cohlots_id' => true,
        'cubundle_id' => true,
        'created' => true,
        'modified' => true,
        'createdby' => true,
        'modifiedby' => true,
        'deleted' => true,
        'cohbag' => true,
        'cohlot' => true,
    ];
}
