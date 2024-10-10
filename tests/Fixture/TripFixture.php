<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TripFixture
 */
class TripFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'trip';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'prealerte' => 1,
                'produit' => 'Lorem ipsum dolor sit amet',
                'exploaddate' => '2024-10-10',
                'tonnagetoload' => 'Lorem ip',
                'tonnageload' => 1,
                'loaddate' => '2024-10-10',
                'templot' => 'Lorem ipsum dolor sit amet',
                'imexlot' => 'Lorem ipsum dolor sit amet',
                'items' => 1,
                'loadassist' => 'Lorem ipsum dolor sit amet',
                'ckopsop' => 'Lorem ipsum dolor sit amet',
                'forkliftop1' => 'Lorem ipsum dolor sit amet',
                'dateckops' => '2024-10-10 16:16:02',
                'datewbein' => '2024-10-10 16:16:02',
                'datewbout' => '2024-10-10 16:16:02',
                'wbopin' => 'Lorem ipsum dolor sit amet',
                'wbopout' => 'Lorem ipsum dolor sit amet',
                'netweight' => 1,
                'grossweight' => 1,
                'wbticket' => 'Lorem ipsum dolor ',
                'tare' => 1,
                'nbitemwb' => 1,
                'commentwb' => 'Lorem ipsum dolor sit amet',
                'ckadate' => '2024-10-10',
                'ckaop' => 'Lorem ipsum dolor sit amet',
                'nbitemcka' => 1,
                'commentcka' => 'Lorem ipsum dolor sit amet',
                'expbpdate' => '2024-10-10',
                'bpdate' => '2024-10-10',
                'bpop' => 'Lorem ipsum dolor sit amet',
                'fxodate' => '2024-10-10',
                'fxoop' => 'Lorem ipsum dolor sit amet',
                'exitdrcdate' => '2024-10-10',
                'exitdrcop' => 'Lorem ipsum dolor sit amet',
                'exppkldate' => '2024-10-10',
                'pkldate' => '2024-10-10',
                'pklop' => 'Lorem ipsum dolor sit amet',
                'expdocdate' => '2024-10-10',
                'docdate' => '2024-10-10',
                'docop' => 'Lorem ipsum dolor sit amet',
                'expdispdate' => '2024-10-10',
                'dispdate' => '2024-10-10',
                'dispop' => 'Lorem ipsum dolor sit amet',
                'statutload' => 'Lorem ipsum dolor sit amet',
                'statutckops' => 'Lorem ipsum dolor sit amet',
                'statutcka' => 'Lorem ipsum dolor sit amet',
                'statutbp' => 'Lorem ipsum dolor sit amet',
                'statutfxo' => 'Lorem ipsum dolor sit amet',
                'statutpkl' => 'Lorem ipsum dolor sit amet',
                'statutexitdrc' => 'Lorem ipsum dolor sit amet',
                'statutdoc' => 'Lorem ipsum dolor sit amet',
                'statutdisp' => 'Lorem ipsum dolor sit amet',
                'statutwb' => 'Lorem ipsum dolor sit amet',
                'datetrip' => '2024-10-10 16:16:02',
                'iduser' => 1,
                'statuttrip' => 'Lorem ipsum dolor sit amet',
                'moisgestion' => 'Lorem ip',
                'updated' => '2024-10-10 16:16:02',
                'invoicedate' => '2024-10-10',
                'invoiceop' => 'Lorem ipsum dolor sit amet',
                'statutinvoice' => 'Lorem ipsum dolor sit amet',
                'commentdisp' => 'Lorem ipsum dolor sit amet',
                'arrdate' => '2024-10-10',
                'typetransp' => 'Lorem ipsum dolor ',
                'samplingdate' => '2024-10-10',
                'samplingop' => 'Lorem ipsum dolor sit amet',
                'stickercheckdate' => '2024-10-10',
                'stickercheckop' => 'Lorem ipsum dolor sit amet',
                'loadcheckdate' => '2024-10-10',
                'loadcheckop' => 'Lorem ipsum dolor sit amet',
                'riskdate' => '2024-10-10 16:16:02',
                'statutrisk' => 'Lorem ipsum dolor sit amet',
                'riskop' => 1,
                'commentrisk' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
