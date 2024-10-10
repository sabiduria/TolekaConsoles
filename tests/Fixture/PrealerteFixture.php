<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PrealerteFixture
 */
class PrealerteFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'prealerte';
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
                'camion' => 1,
                'destination' => 1,
                'produit' => 'Lorem ipsum dolor sit amet',
                'eta' => '2024-10-10',
                'position' => 'Lorem ipsum dolor sit amet',
                'datearrivee' => '2024-10-10',
                'date' => '2024-10-10 16:15:52',
                'iduser' => 1,
                'statut' => 'Lorem ipsum dolor sit amet',
                'commentaire' => 'Lorem ipsum dolor sit amet',
                'moisgestion' => 'Lorem ip',
                'loadingplan' => 'Lorem ipsum dolor sit amet',
                'destinationg' => 'Lorem ipsum dolor sit amet',
                'exitpoint' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
