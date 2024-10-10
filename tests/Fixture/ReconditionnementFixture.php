<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ReconditionnementFixture
 */
class ReconditionnementFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'reconditionnement';
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
                'bagid' => 'Lorem ipsum dolor sit amet',
                'zone' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet',
                'statut' => 'Lorem ipsum dolor sit amet',
                'dateid' => '2024-10-10 16:15:54',
                'iduser' => 1,
                'dateok' => '2024-10-10 16:15:54',
                'iduser2' => 1,
                'produit' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
