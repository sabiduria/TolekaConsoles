<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LcFixture
 */
class LcFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'lc';
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
                'year' => 1,
                'month' => 'Lo',
                'pk' => 'Lorem ipsum dolor sit amet',
                'date' => '2024-10-10 16:15:45',
                'iduser' => 1,
            ],
        ];
        parent::init();
    }
}
