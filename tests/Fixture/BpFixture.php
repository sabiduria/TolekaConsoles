<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BpFixture
 */
class BpFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'bp';
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
                'num' => 1,
                'numbp' => 'Lorem ipsum dolor sit amet',
                'licence' => 'Lorem ipsum dolor sit amet',
                'typeproduit' => 'Lorem ipsum dolor sit amet',
                'produit' => 'Lorem ipsum dolor sit amet',
                'tranche' => 'Lorem ipsum dolor sit amet',
                'destination' => 'Lorem ipsum dolor sit amet',
                'agence' => 'Lorem ipsum dolor sit amet',
                'moyentransport' => 'Lorem ipsum dolor sit amet',
                'numautorisation' => 'Lorem ipsum dolor sit amet',
                'etablipar' => 'Lorem ipsum dolor sit amet',
                'date' => '2024-10-10 16:15:29',
                'modifiepar' => 'Lorem ipsum dolor sit amet',
                'datemodification' => '2024-10-10 16:15:29',
                'approuvepar' => 'Lorem ipsum dolor sit amet',
                'dateapprobation' => '2024-10-10 16:15:29',
                'numdc' => 'Lorem ipsum dolor sit amet',
                'statut' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
