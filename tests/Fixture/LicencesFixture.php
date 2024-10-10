<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LicencesFixture
 */
class LicencesFixture extends TestFixture
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
                'codelic' => 'Lorem ipsum dolor sit amet',
                'tonnage' => 1,
                'agence' => 'Lorem ipsum dolor sit amet',
                'destination' => 'Lorem ipsum dolor sit amet',
                'produit' => 'Lorem ipsum dolor sit amet',
                'typeproduit' => 'Lorem ipsum dolor sit amet',
                'trancheteneur' => 'Lorem ipsum dolor sit amet',
                'periode' => '2024-10-10',
                'validite' => 1,
                'expiration' => '2024-10-10',
                'tonnagerestant' => 'Lorem ipsum dolor sit amet',
                'seuil' => 'Lorem ipsum dolor sit amet',
                'frontiere' => 'Lorem ipsum dolor sit amet',
                'statut' => 'Lorem ipsum dolor ',
                'date' => '2024-10-10 16:15:45',
                'iduser' => 1,
                'moyentrans' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
