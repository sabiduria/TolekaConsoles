<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LogdbFixture
 */
class LogdbFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'logdb';
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
                'table' => 'Lorem ipsum dolor sit amet',
                'type' => 'Lorem ipsum dolor sit amet',
                'date' => '2024-10-10 16:15:46',
                'iduser' => 1,
            ],
        ];
        parent::init();
    }
}
