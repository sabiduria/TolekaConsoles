<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PaysFixture
 */
class PaysFixture extends TestFixture
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
                'nompays' => 'Lorem ipsum dolor sit amet',
                'fraistransport' => 1,
                'iduser' => 1,
                'datemiseajour' => '2024-10-10 16:15:51',
            ],
        ];
        parent::init();
    }
}
