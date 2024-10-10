<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TransactionswbFixture
 */
class TransactionswbFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'transactionswb';
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
                'idtrip' => 1,
                'wbop' => 'Lorem ipsum dolor sit amet',
                'date' => '2024-10-10 16:16:01',
                'typetrans' => 'Lorem ipsum dolor sit amet',
                'tare' => 1,
                'poidsbrut' => 1,
                'poidsnet' => 1,
                'nbitems' => 1,
                'decision' => 'Lorem ipsum dolor sit amet',
                'wbticket' => 'Lorem ipsum dolor sit amet',
                'nbpass' => 1,
                'variance' => 1,
                'purvar' => 1,
                'lienwbticket' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
