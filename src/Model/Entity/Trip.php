<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Trip Entity
 *
 * @property int $id
 * @property int $prealerte
 * @property string $produit
 * @property \Cake\I18n\Date $exploaddate
 * @property string $tonnagetoload
 * @property float $tonnageload
 * @property \Cake\I18n\Date $loaddate
 * @property string $templot
 * @property string $imexlot
 * @property int $items
 * @property string $loadassist
 * @property string $ckopsop
 * @property string $forkliftop1
 * @property \Cake\I18n\DateTime $dateckops
 * @property \Cake\I18n\DateTime $datewbein
 * @property \Cake\I18n\DateTime $datewbout
 * @property string $wbopin
 * @property string $wbopout
 * @property float $netweight
 * @property float $grossweight
 * @property string $wbticket
 * @property int $tare
 * @property int $nbitemwb
 * @property string $commentwb
 * @property \Cake\I18n\Date $ckadate
 * @property string $ckaop
 * @property int $nbitemcka
 * @property string $commentcka
 * @property \Cake\I18n\Date $expbpdate
 * @property \Cake\I18n\Date $bpdate
 * @property string $bpop
 * @property \Cake\I18n\Date $fxodate
 * @property string $fxoop
 * @property \Cake\I18n\Date $exitdrcdate
 * @property string $exitdrcop
 * @property \Cake\I18n\Date $exppkldate
 * @property \Cake\I18n\Date $pkldate
 * @property string $pklop
 * @property \Cake\I18n\Date $expdocdate
 * @property \Cake\I18n\Date $docdate
 * @property string $docop
 * @property \Cake\I18n\Date $expdispdate
 * @property \Cake\I18n\Date $dispdate
 * @property string $dispop
 * @property string $statutload
 * @property string $statutckops
 * @property string $statutcka
 * @property string $statutbp
 * @property string $statutfxo
 * @property string $statutpkl
 * @property string $statutexitdrc
 * @property string $statutdoc
 * @property string $statutdisp
 * @property string $statutwb
 * @property \Cake\I18n\DateTime $datetrip
 * @property int $iduser
 * @property string $statuttrip
 * @property string $moisgestion
 * @property \Cake\I18n\DateTime $updated
 * @property \Cake\I18n\Date $invoicedate
 * @property string $invoiceop
 * @property string $statutinvoice
 * @property string $commentdisp
 * @property \Cake\I18n\Date $arrdate
 * @property string $typetransp
 * @property \Cake\I18n\Date $samplingdate
 * @property string $samplingop
 * @property \Cake\I18n\Date $stickercheckdate
 * @property string $stickercheckop
 * @property \Cake\I18n\Date $loadcheckdate
 * @property string $loadcheckop
 * @property \Cake\I18n\DateTime $riskdate
 * @property string $statutrisk
 * @property int $riskop
 * @property string $commentrisk
 */
class Trip extends Entity
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
        'prealerte' => true,
        'produit' => true,
        'exploaddate' => true,
        'tonnagetoload' => true,
        'tonnageload' => true,
        'loaddate' => true,
        'templot' => true,
        'imexlot' => true,
        'items' => true,
        'loadassist' => true,
        'ckopsop' => true,
        'forkliftop1' => true,
        'dateckops' => true,
        'datewbein' => true,
        'datewbout' => true,
        'wbopin' => true,
        'wbopout' => true,
        'netweight' => true,
        'grossweight' => true,
        'wbticket' => true,
        'tare' => true,
        'nbitemwb' => true,
        'commentwb' => true,
        'ckadate' => true,
        'ckaop' => true,
        'nbitemcka' => true,
        'commentcka' => true,
        'expbpdate' => true,
        'bpdate' => true,
        'bpop' => true,
        'fxodate' => true,
        'fxoop' => true,
        'exitdrcdate' => true,
        'exitdrcop' => true,
        'exppkldate' => true,
        'pkldate' => true,
        'pklop' => true,
        'expdocdate' => true,
        'docdate' => true,
        'docop' => true,
        'expdispdate' => true,
        'dispdate' => true,
        'dispop' => true,
        'statutload' => true,
        'statutckops' => true,
        'statutcka' => true,
        'statutbp' => true,
        'statutfxo' => true,
        'statutpkl' => true,
        'statutexitdrc' => true,
        'statutdoc' => true,
        'statutdisp' => true,
        'statutwb' => true,
        'datetrip' => true,
        'iduser' => true,
        'statuttrip' => true,
        'moisgestion' => true,
        'updated' => true,
        'invoicedate' => true,
        'invoiceop' => true,
        'statutinvoice' => true,
        'commentdisp' => true,
        'arrdate' => true,
        'typetransp' => true,
        'samplingdate' => true,
        'samplingop' => true,
        'stickercheckdate' => true,
        'stickercheckop' => true,
        'loadcheckdate' => true,
        'loadcheckop' => true,
        'riskdate' => true,
        'statutrisk' => true,
        'riskop' => true,
        'commentrisk' => true,
    ];
}
