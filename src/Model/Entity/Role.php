<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Role Entity
 *
 * @property int $id
 * @property string $role
 * @property int $iduser
 * @property \Cake\I18n\DateTime $datemiseajour
 * @property string $statut
 * @property int $mention
 *
 * @property \App\Model\Entity\User[] $user
 */
class Role extends Entity
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
        'role' => true,
        'iduser' => true,
        'datemiseajour' => true,
        'statut' => true,
        'mention' => true,
        'user' => true
    ];
}
