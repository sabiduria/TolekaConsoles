<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ChargementsFixture
 */
class ChargementsFixture extends TestFixture
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
                'numlot' => 'Lorem ipsum dolor sit amet',
                'loadassistant' => 'Lorem ipsum dolor sit amet',
                'loadhelper1' => 'Lorem ipsum dolor sit amet',
                'loadhelper2' => 'Lorem ipsum dolor sit amet',
                'operateur1' => 'Lorem ipsum dolor sit amet',
                'operateur2' => 'Lorem ipsum dolor sit amet',
                'date' => '2024-10-10 16:15:29',
                'user' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
