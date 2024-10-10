<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * Rolead3Fixture
 */
class Rolead3Fixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'rolead3';
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
