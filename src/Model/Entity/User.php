<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property int $idrole
 * @property string|null $username
 * @property string|null $password
 * @property string|null $email
 * @property string|null $avatar
 * @property string|null $prenom
 * @property string $nom
 * @property string $telephone
 * @property string|null $statut
 * @property \Cake\I18n\DateTime $dateinscription
 * @property int $iduser
 * @property \Cake\I18n\DateTime $datemiseajour
 * @property string $sexe
 * @property string $codeuser
 * @property int $rolead1
 * @property int $rolead2
 * @property int $rolead3
 * @property int $section
 * @property string $langue
 * @property bool $synced
 *
 * @property \App\Model\Entity\Affectation[] $affectations
 */
class User extends Entity
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
        'idrole' => true,
        'username' => true,
        'password' => true,
        'email' => true,
        'avatar' => true,
        'prenom' => true,
        'nom' => true,
        'telephone' => true,
        'statut' => true,
        'dateinscription' => true,
        'iduser' => true,
        'datemiseajour' => true,
        'sexe' => true,
        'codeuser' => true,
        'rolead1' => true,
        'rolead2' => true,
        'rolead3' => true,
        'section' => true,
        'langue' => true,
        'synced' => true,
        'affectations' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var list<string>
     */
    protected array $_hidden = [
        'password',
    ];
}
