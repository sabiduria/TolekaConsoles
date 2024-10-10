<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CohbagsFixture
 */
class CohbagsFixture extends TestFixture
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
                'bagid' => 'Lorem ipsum dolor sit amet',
                'composite' => 'Lorem ipsum dolor sit amet',
                'dateprod' => '2024-10-10',
                'poids' => 1,
                'localisation' => 'Lorem ipsum dolor sit amet',
                'h2o' => 'Lorem ip',
                'co' => 1,
                'co_cont' => 1,
                'uranium' => 1,
                'mg' => 1,
                'fe' => 1,
                'zn' => 1,
                'ca' => 1,
                'mn' => 1,
                'ni' => 1,
                'al' => 1,
                'cu' => 1,
                'charge' => 'Lorem ip',
                'spec' => 'Lorem ipsum dolor sit amet',
                'lotnumber' => 'Lorem ipsum dolor sit amet',
                'imexlot' => 'Lorem ipsum dolor sit amet',
                'dateload' => '2024-10-10',
                'dateact' => '2024-10-10 16:15:32',
                'iduser' => 1,
                'vpoids' => 1,
                'vh2o' => 1,
                'vco' => 1,
                'produith2o' => 1,
                'produitco' => 1,
                'seal' => 'Lorem ipsum dolor sit amet',
                'dateadded' => '2024-10-10',
                'datechecked' => '2024-10-10',
                'synced' => 1,
            ],
        ];
        parent::init();
    }
}
