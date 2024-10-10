<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MouvementstockFixture
 */
class MouvementstockFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'mouvementstock';
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
                'date' => '2024-10-10 16:15:48',
                'transaction' => 'Lorem ipsum dolor sit amet',
                'iditem' => 1,
                'item' => 'Lorem ipsum dolor sit amet',
                'qteinit' => 1,
                'qtetrans' => 1,
                'qtefin' => 1,
            ],
        ];
        parent::init();
    }
}
