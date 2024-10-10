<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ImexlotupdatesFixture
 */
class ImexlotupdatesFixture extends TestFixture
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
                'oldimexlot' => 'Lorem ipsum dolor sit amet',
                'newimexlot' => 'Lorem ipsum dolor sit amet',
                'iduser' => 1,
                'date' => '2024-10-10 16:15:43',
            ],
        ];
        parent::init();
    }
}
