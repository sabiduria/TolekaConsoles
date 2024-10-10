<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CheckingstickersFixture
 */
class CheckingstickersFixture extends TestFixture
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
                'tonnageload' => 1,
                'items' => 1,
                'horse' => 'Lorem ipsum dolor ',
                'trailers' => 'Lorem ipsum dolor sit amet',
                'comment' => 'Lorem ipsum dolor sit amet',
                'report' => 'Lorem ipsum dolor sit amet',
                'idtrip' => 1,
                'date' => '2024-10-10 16:15:30',
                'iduser' => 1,
                'inspecteur' => 'Lorem ipsum dolor sit amet',
                'moisgestion' => 'Lorem ipsum dolor ',
            ],
        ];
        parent::init();
    }
}
