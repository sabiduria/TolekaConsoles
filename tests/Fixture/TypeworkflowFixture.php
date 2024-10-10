<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TypeworkflowFixture
 */
class TypeworkflowFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'typeworkflow';
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
                'type' => 'Lorem ipsum dolor sit amet',
                'iduser' => 1,
                'date' => '2024-10-10 16:16:04',
            ],
        ];
        parent::init();
    }
}
