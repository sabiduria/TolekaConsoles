<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ShiftsFixture
 */
class ShiftsFixture extends TestFixture
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
                'nomshift' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet',
                'heuredebut' => '16:15:58',
                'heurefin' => '16:15:58',
                'iduser' => 1,
                'date' => '2024-10-10 16:15:58',
            ],
        ];
        parent::init();
    }
}
