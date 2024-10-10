<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RoleoperationsFixture
 */
class RoleoperationsFixture extends TestFixture
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
                'roleop' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
