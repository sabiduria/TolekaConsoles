<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Licence Entity
 *
 * @property int $id
 * @property string $codelic
 * @property int $tonnage
 * @property string $agence
 * @property string $destination
 * @property string $produit
 * @property string $typeproduit
 * @property string $trancheteneur
 * @property \Cake\I18n\Date $periode
 * @property int $validite
 * @property \Cake\I18n\Date $expiration
 * @property string $tonnagerestant
 * @property string $seuil
 * @property string $frontiere
 * @property string $statut
 * @property \Cake\I18n\DateTime $date
 * @property int $iduser
 * @property string $moyentrans
 */
class Licence extends Entity
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
        'codelic' => true,
        'tonnage' => true,
        'agence' => true,
        'destination' => true,
        'produit' => true,
        'typeproduit' => true,
        'trancheteneur' => true,
        'periode' => true,
        'validite' => true,
        'expiration' => true,
        'tonnagerestant' => true,
        'seuil' => true,
        'frontiere' => true,
        'statut' => true,
        'date' => true,
        'iduser' => true,
        'moyentrans' => true,
    ];
}
