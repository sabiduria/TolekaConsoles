<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsermenuFixture
 */
class UsermenuFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'usermenu';
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
                'idmenu' => 1,
                'idrole' => 1,
                'iduser' => 1,
                'date' => '2024-10-10 16:16:04',
            ],
        ];
        parent::init();
    }
}
