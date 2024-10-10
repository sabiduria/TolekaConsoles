<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Agencedouane Entity
 *
 * @property int $id
 * @property string $nomagence
 * @property string $responsable
 * @property string $telresp
 * @property string $emailresp
 * @property string $agentsite
 * @property string $telagent
 * @property string $emailagent
 * @property string $adresse
 * @property string $pays
 * @property string $statut
 * @property \Cake\I18n\DateTime $date
 * @property int $iduser
 */
class Agencedouane extends Entity
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
        'nomagence' => true,
        'responsable' => true,
        'telresp' => true,
        'emailresp' => true,
        'agentsite' => true,
        'telagent' => true,
        'emailagent' => true,
        'adresse' => true,
        'pays' => true,
        'statut' => true,
        'date' => true,
        'iduser' => true,
    ];
}
