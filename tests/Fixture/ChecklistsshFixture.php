<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ChecklistsshFixture
 */
class ChecklistsshFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'checklistssh';
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
                'bus' => 'Lorem ipsum dolor sit amet',
                'datechecking' => '2024-10-10',
                'typecontrole' => 'Lorem ipsum dolor sit amet',
                'iduser' => 1,
                'date' => '2024-10-10 16:15:31',
            ],
        ];
        parent::init();
    }
}
