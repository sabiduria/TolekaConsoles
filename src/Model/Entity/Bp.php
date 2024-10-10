<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Bp Entity
 *
 * @property int $id
 * @property int $num
 * @property string $numbp
 * @property string $licence
 * @property string $typeproduit
 * @property string $produit
 * @property string $tranche
 * @property string $destination
 * @property string $agence
 * @property string $moyentransport
 * @property string $numautorisation
 * @property string $etablipar
 * @property \Cake\I18n\DateTime $date
 * @property string $modifiepar
 * @property \Cake\I18n\DateTime $datemodification
 * @property string $approuvepar
 * @property \Cake\I18n\DateTime $dateapprobation
 * @property string $numdc
 * @property string $statut
 */
class Bp extends Entity
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
        'num' => true,
        'numbp' => true,
        'licence' => true,
        'typeproduit' => true,
        'produit' => true,
        'tranche' => true,
        'destination' => true,
        'agence' => true,
        'moyentransport' => true,
        'numautorisation' => true,
        'etablipar' => true,
        'date' => true,
        'modifiepar' => true,
        'datemodification' => true,
        'approuvepar' => true,
        'dateapprobation' => true,
        'numdc' => true,
        'statut' => true,
    ];
}
