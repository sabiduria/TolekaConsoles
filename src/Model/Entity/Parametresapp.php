<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Parametresapp Entity
 *
 * @property int $id
 * @property string $nomapp
 * @property string $slogan
 * @property string $description
 * @property string $logo
 * @property string $emailapp
 * @property string $telapp
 * @property string $nomresp
 * @property string $telresp
 * @property string $emailresp
 * @property string $domaine
 * @property string $code
 * @property int $iduser
 * @property \Cake\I18n\DateTime $datemiseajour
 * @property string $rccm
 * @property string $idnat
 * @property string $numimpot
 * @property string $numtva
 * @property string $nomcompagnie
 * @property float $declaration
 * @property float $prixdocuments
 * @property string $banque
 * @property string $numcomptebanqueusd
 * @property string $numcomptebanquecdf
 * @property string $numcompte_airtelmonney
 * @property string $numcompte_mpesa
 * @property string $numcompte_orangemonney
 * @property string $version
 */
class Parametresapp extends Entity
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
        'nomapp' => true,
        'slogan' => true,
        'description' => true,
        'logo' => true,
        'emailapp' => true,
        'telapp' => true,
        'nomresp' => true,
        'telresp' => true,
        'emailresp' => true,
        'domaine' => true,
        'code' => true,
        'iduser' => true,
        'datemiseajour' => true,
        'rccm' => true,
        'idnat' => true,
        'numimpot' => true,
        'numtva' => true,
        'nomcompagnie' => true,
        'declaration' => true,
        'prixdocuments' => true,
        'banque' => true,
        'numcomptebanqueusd' => true,
        'numcomptebanquecdf' => true,
        'numcompte_airtelmonney' => true,
        'numcompte_mpesa' => true,
        'numcompte_orangemonney' => true,
        'version' => true,
    ];
}
