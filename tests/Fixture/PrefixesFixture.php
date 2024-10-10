<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PrefixesFixture
 */
class PrefixesFixture extends TestFixture
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
                'prefixe' => 'Lorem ip',
                'type' => 'Lorem ipsum dolor sit amet',
                'status' => 'Lorem ip',
                'iduser' => 1,
                'date' => '2024-10-10 16:15:52',
            ],
        ];
        parent::init();
    }
}
