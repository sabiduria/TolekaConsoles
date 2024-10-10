<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * KcclabresultsFixture
 */
class KcclabresultsFixture extends TestFixture
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
                'composite' => 'Lorem ipsum dolor sit amet',
                'co' => 1,
                'al' => 1,
                'ca' => 1,
                'cu' => 1,
                'fe' => 1,
                'mg' => 1,
                'mn' => 1,
                'ni' => 1,
                'zn' => 1,
                'u' => 1,
                'h2o' => 1,
                'date' => '2024-10-10 16:15:43',
                'iduser' => 1,
            ],
        ];
        parent::init();
    }
}
