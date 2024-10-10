<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * Rolead1Fixture
 */
class Rolead1Fixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'rolead1';
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
                'role' => 'Lorem ipsum dolor ',
            ],
        ];
        parent::init();
    }
}
