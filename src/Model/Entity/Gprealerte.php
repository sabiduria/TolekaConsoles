<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Gprealerte Entity
 *
 * @property int $id
 * @property string $transporteur
 * @property string $horse
 * @property string $trailer1
 * @property string $trailer2
 * @property string $prenom
 * @property string $nom
 * @property string $passeport
 * @property float $tonnage
 * @property string $position
 * @property string $destination
 * @property string $pays
 * @property string $code
 * @property \Cake\I18n\Date $eta
 * @property \Cake\I18n\Date $datearrivee
 * @property string $corridor
 * @property string $produit
 * @property string $typetrans
 * @property \Cake\I18n\Date $dateexpvisa
 * @property \Cake\I18n\Date $dateexppass
 * @property \Cake\I18n\DateTime $date
 * @property int $iduser
 * @property string $statut
 * @property \Cake\I18n\Date $loadingdate
 * @property string $exitpoint
 */
class Gprealerte extends Entity
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
        'transporteur' => true,
        'horse' => true,
        'trailer1' => true,
        'trailer2' => true,
        'prenom' => true,
        'nom' => true,
        'passeport' => true,
        'tonnage' => true,
        'position' => true,
        'destination' => true,
        'pays' => true,
        'code' => true,
        'eta' => true,
        'datearrivee' => true,
        'corridor' => true,
        'produit' => true,
        'typetrans' => true,
        'dateexpvisa' => true,
        'dateexppass' => true,
        'date' => true,
        'iduser' => true,
        'statut' => true,
        'loadingdate' => true,
        'exitpoint' => true,
    ];
}
