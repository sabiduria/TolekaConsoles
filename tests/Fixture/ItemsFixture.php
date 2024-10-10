<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ItemsFixture
 */
class ItemsFixture extends TestFixture
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
                'itemname' => 'Lorem ipsum dolor sit amet',
                'quantity' => 1,
                'nbreitems' => 1,
                'length' => 1,
                'width' => 1,
                'height' => 1,
                'cbm' => 1,
                'averageweightperpackage' => 1,
                'packagetotalweight' => 1,
                'netweightperpackage' => 1,
                'itemnetweight' => 1,
                'nature' => 'Lorem ipsum dolor sit amet',
                'idshop' => 'Lorem ipsum dolor sit amet',
                'idstore' => 1,
                'idcl' => 1,
                'datereceipt' => '2024-10-10',
                'daterecord' => '2024-10-10 16:15:43',
                'shelf' => 'Lor',
                'ray' => 1,
                'statut' => 'Lorem ipsum dolor ',
                'iduser' => 1,
                'date' => '2024-10-10 16:15:43',
                'iduser2' => 1,
                'miseajour' => '2024-10-10 16:15:43',
            ],
        ];
        parent::init();
    }
}
