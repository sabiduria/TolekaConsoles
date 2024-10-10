<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SelectionsFixture
 */
class SelectionsFixture extends TestFixture
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
                'top' => 1,
                'low' => 1,
                'iduser' => 1,
                'date' => '2024-10-10 16:15:58',
            ],
        ];
        parent::init();
    }
}
