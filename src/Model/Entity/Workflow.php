<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Workflow Entity
 *
 * @property int $id
 * @property int $status_id
 * @property int $roles_id
 * @property int $steps
 * @property string $product
 *
 * @property \App\Model\Entity\Status $status
 * @property \App\Model\Entity\Role $role
 */
class Workflow extends Entity
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
        'status_id' => true,
        'roles_id' => true,
        'steps' => true,
        'product' => true,
        'status' => true,
        'role' => true,
    ];
}
