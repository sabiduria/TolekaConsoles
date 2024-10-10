<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AdminSyncFixture
 */
class AdminSyncFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'admin_sync';
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
                'cohbags_id' => 1,
                'cohlots_id' => 1,
                'cubundle_id' => 1,
                'created' => '2024-10-10 16:15:26',
                'modified' => '2024-10-10 16:15:26',
                'createdby' => 'Lorem ipsum dolor sit amet',
                'modifiedby' => 'Lorem ipsum dolor sit amet',
                'deleted' => 1,
            ],
        ];
        parent::init();
    }
}
