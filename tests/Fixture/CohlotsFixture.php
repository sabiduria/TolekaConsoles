<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CohlotsFixture
 */
class CohlotsFixture extends TestFixture
{
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
                'idtrip' => 1,
                'numlot' => 'Lorem ipsum dolor sit amet',
                'numimex' => 'Lorem ipsum dolor sit amet',
                'spec' => 'Lorem ipsum dolor sit amet',
                'date' => '2024-10-10 16:15:33',
                'destination' => 'Lorem ipsum dolor sit amet',
                'paysdest' => 'Lorem ipsum dolor sit amet',
                'corridor' => 'Lorem ipsum dolor sit amet',
                'horse' => 'Lorem ipsum dolor ',
                'trailer1' => 'Lorem ipsum dolor ',
                'trailer2' => 'Lorem ipsum dolor ',
                'transporteur' => 'Lorem ipsum dolor sit amet',
                'moisgestion' => 'Lorem ip',
                'statut' => 'Lorem ipsum dolor sit amet',
                'iduser' => 1,
                'tonnage' => 1,
                'tonnageload' => 1,
                'sealdgda' => 'Lorem ipsum dolor sit amet',
                'numbp' => 'Lorem ipsum dolor sit amet',
                'produit' => 'Lorem ip',
                'physicalgrade' => 'Lorem ipsum dolor sit amet',
                'chemicalgrade' => 'Lorem ipsum dolor sit amet',
                'unite' => 'Lorem ipsum dolor ',
                'numdc' => 'Lorem ipsum dolor sit amet',
                'year' => 1,
                'sealsecurite' => 'Lorem ipsum dolor sit amet',
                'synced' => 1,
            ],
        ];
        parent::init();
    }
}
