<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MoisgestionFixture
 */
class MoisgestionFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'moisgestion';
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
                'moisgestion' => 'Lorem ip',
            ],
        ];
        parent::init();
    }
}
