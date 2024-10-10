<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TypeconcentrateFixture
 */
class TypeconcentrateFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'typeconcentrate';
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
                'nom' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
