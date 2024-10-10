<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RequisitionsFixture
 */
class RequisitionsFixture extends TestFixture
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
                'iduser' => 1,
                'item' => 'Lorem ipsum dolor sit amet',
                'motif' => 'Lorem ipsum dolor sit amet',
                'date' => '2024-10-10 16:15:54',
                'qtedem' => 1,
                'qteac' => 1,
                'idac' => 1,
                'dateac' => '2024-10-10 16:15:54',
                'statutac' => 'Lorem ipsum dolor sit amet',
                'qteliv' => 1,
                'idliv' => 1,
                'dateliv' => '2024-10-10 16:15:54',
                'commentliv' => 'Lorem ipsum dolor sit amet',
                'commentac' => 'Lorem ipsum dolor sit amet',
                'statut' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
