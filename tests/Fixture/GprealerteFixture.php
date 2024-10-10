<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GprealerteFixture
 */
class GprealerteFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'gprealerte';
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
                'transporteur' => 'Lorem ipsum dolor sit amet',
                'horse' => 'Lorem ipsum dolor sit amet',
                'trailer1' => 'Lorem ipsum dolor sit amet',
                'trailer2' => 'Lorem ipsum dolor sit amet',
                'prenom' => 'Lorem ipsum dolor sit amet',
                'nom' => 'Lorem ipsum dolor sit amet',
                'passeport' => 'Lorem ipsum dolor sit amet',
                'tonnage' => 1,
                'position' => 'Lorem ipsum dolor sit amet',
                'destination' => 'Lorem ipsum dolor sit amet',
                'pays' => 'Lorem ipsum dolor sit amet',
                'code' => 'Lorem ipsum dolor sit amet',
                'eta' => '2024-10-10',
                'datearrivee' => '2024-10-10',
                'corridor' => 'Lorem ipsum dolor sit amet',
                'produit' => 'Lorem ipsum dolor ',
                'typetrans' => 'Lorem ipsum dolor sit amet',
                'dateexpvisa' => '2024-10-10',
                'dateexppass' => '2024-10-10',
                'date' => '2024-10-10 16:15:42',
                'iduser' => 1,
                'statut' => 'Lorem ipsum dolor sit amet',
                'loadingdate' => '2024-10-10',
                'exitpoint' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
