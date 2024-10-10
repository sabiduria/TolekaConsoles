<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ScansecuritysealsFixture
 */
class ScansecuritysealsFixture extends TestFixture
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
                'numlot' => 'Lorem ipsum dolor sit amet',
                'imexlot' => 'Lorem ipsum dolor sit amet',
                'sealsscanned' => 'Lorem ipsum dolor sit amet',
                'operator' => 'Lorem ipsum dolor sit amet',
                'date' => '2024-10-10 16:15:57',
            ],
        ];
        parent::init();
    }
}
