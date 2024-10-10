<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CubundleFixture
 */
class CubundleFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'cubundle';
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
                'dateprod' => 'Lorem ipsum dolor sit amet',
                'unit' => 'Lorem ip',
                'lotnumber' => 'Lorem ipsum dolor sit amet',
                'imexlot' => 'Lorem ipsum dolor sit amet',
                'bundlecode' => 'Lorem ipsum dolor sit amet',
                'composite' => 'Lorem ipsum dolor sit amet',
                'grossweight' => 1,
                'netweight' => 1,
                'visualgrade' => 'Lorem ip',
                'chemicalgrade' => 'Lorem ip',
                'finalgrade' => 'Lorem ip',
                'location' => 'Lorem ipsum dolor ',
                'charge' => 'Lorem ip',
                'dateloaded' => '2024-10-10',
                'date' => '2024-10-10 16:15:34',
                'iduser' => 1,
                'seal1' => 'Lorem ipsum dolor sit amet',
                'seal2' => 'Lorem ipsum dolor sit amet',
                'dateadded' => '2024-10-10',
                'datechecked' => '2024-10-10',
                'synced' => 1,
            ],
        ];
        parent::init();
    }
}
