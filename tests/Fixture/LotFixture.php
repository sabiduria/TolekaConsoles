<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LotFixture
 */
class LotFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'lot';
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
                'nbbags' => 1,
                'tonnage' => 1,
                'destination' => 'Lorem ipsum dolor sit amet',
                'statut' => 'Lorem ipsum dolor ',
                'date' => '2024-10-10 16:15:47',
                'iduser' => 1,
            ],
        ];
        parent::init();
    }
}
