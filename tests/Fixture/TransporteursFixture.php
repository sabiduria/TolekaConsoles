<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TransporteursFixture
 */
class TransporteursFixture extends TestFixture
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
                'nomtrans' => 'Lorem ipsum dolor sit amet',
                'emailtrans' => 'Lorem ipsum dolor sit amet',
                'teltrans' => 'Lorem ipsum dolor ',
                'pays' => 'Lorem ipsum dolor sit amet',
                'date' => '2024-10-10 16:16:02',
                'iduser' => 1,
                'statut' => 'Lorem ipsum dolor ',
            ],
        ];
        parent::init();
    }
}
