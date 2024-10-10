<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * WorkflowsFixture
 */
class WorkflowsFixture extends TestFixture
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
                'status_id' => 1,
                'roles_id' => 1,
                'steps' => 1,
                'product' => 'Lorem ipsum d',
            ],
        ];
        parent::init();
    }
}
