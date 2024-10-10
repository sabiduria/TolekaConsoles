<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DcFixture
 */
class DcFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'dc';
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
                'numdc' => 'Lorem ipsum dolor sit amet',
                'numbp' => 'Lorem ipsum dolor sit amet',
                'licence' => 'Lorem ipsum dolor sit amet',
                'produit' => 'Lorem ipsum dolor sit amet',
                'tranche' => 'Lorem ipsum dolor sit amet',
                'date' => '2024-10-10 16:15:34',
                'iduser' => 'Lorem ipsum dolor sit amet',
                'statut' => 'Lorem ipsum dolor sit amet',
                'tonnage' => 1,
                'nbitems' => 1,
                'liendc' => 'Lorem ipsum dolor sit amet',
                'tonnagerestant' => 1,
                'tonnageutilise' => 1,
                'nbpaquets' => 1,
                'seuil' => 1,
                'numdckcc' => 'Lorem ipsum dolor sit amet',
                'numtransport' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
