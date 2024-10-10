<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BagcorigesFixture
 */
class BagcorigesFixture extends TestFixture
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
                'bagid' => 'Lorem ipsum dolor sit amet',
                'dateprod' => '2024-10-10',
            ],
        ];
        parent::init();
    }
}
