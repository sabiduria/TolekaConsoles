<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LotparamsFixture
 */
class LotparamsFixture extends TestFixture
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
                'lotnumber' => 'Lorem ipsum dolor ',
                'product' => 'Lorem ipsum dolor ',
                'physicalgrade' => 'Lorem ipsum dolor ',
                'unit' => 'Lorem ipsum dolor ',
                'created' => '2024-10-10 16:15:47',
                'modified' => '2024-10-10 16:15:47',
                'createdby' => 'Lorem ipsum dolor sit amet',
                'modifiedby' => 'Lorem ipsum dolor sit amet',
                'deleted' => 1,
            ],
        ];
        parent::init();
    }
}
