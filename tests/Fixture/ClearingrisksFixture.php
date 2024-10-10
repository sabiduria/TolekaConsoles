<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ClearingrisksFixture
 */
class ClearingrisksFixture extends TestFixture
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
                'lotnumber' => 'Lorem ipsum dolor sit amet',
                'imexlot' => 'Lorem ipsum dolor sit amet',
                'riskdate' => '2024-10-10 16:15:32',
                'riskop' => 'Lorem ipsum dolor sit amet',
                'commentrisk' => 'Lorem ipsum dolor sit amet',
                'statutrisk' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
