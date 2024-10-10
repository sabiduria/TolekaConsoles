<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LotdetailsFixture
 */
class LotdetailsFixture extends TestFixture
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
                'lotid' => 1,
                'bagid' => 1,
                'bagnumber' => 'Lorem ipsum dolor sit amet',
                'poids' => 1,
                'h2o' => 1,
                'co' => 1,
                'fe' => 1,
                'ca' => 1,
                'mg' => 1,
                'ni' => 1,
                'mn' => 1,
                'si' => 1,
                'al' => 1,
                'cu' => 1,
                'statut' => 'Lorem ipsum dolor ',
                'date' => '2024-10-10 16:15:47',
                'iduser' => 1,
            ],
        ];
        parent::init();
    }
}
