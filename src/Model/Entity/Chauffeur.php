<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Chauffeur Entity
 *
 * @property int $id
 * @property string $prenomch
 * @property string $nomch
 * @property string $telch
 * @property string $pays
 * @property string $passeportch
 * @property \Cake\I18n\DateTime $date
 * @property \Cake\I18n\Date $datevisa
 * @property \Cake\I18n\Date $datepass
 * @property int $iduser
 * @property string $statut
 * @property string $camion
 */
class Chauffeur extends Entity
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
        'prenomch' => true,
        'nomch' => true,
        'telch' => true,
        'pays' => true,
        'passeportch' => true,
        'date' => true,
        'datevisa' => true,
        'datepass' => true,
        'iduser' => true,
        'statut' => true,
        'camion' => true,
    ];
}
