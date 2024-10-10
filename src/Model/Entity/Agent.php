<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Agent Entity
 *
 * @property int $id
 * @property string $matricule
 * @property string $prenom
 * @property string $nom
 * @property \Cake\I18n\Date $datenaissance
 * @property \Cake\I18n\Date $dateengagement
 * @property string $genre
 * @property string $fonction
 * @property string $equipe
 * @property string $reportto
 * @property string $telephone
 * @property string $email
 * @property string $statut
 */
class Agent extends Entity
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
        'matricule' => true,
        'prenom' => true,
        'nom' => true,
        'datenaissance' => true,
        'dateengagement' => true,
        'genre' => true,
        'fonction' => true,
        'equipe' => true,
        'reportto' => true,
        'telephone' => true,
        'email' => true,
        'statut' => true,
    ];
}
