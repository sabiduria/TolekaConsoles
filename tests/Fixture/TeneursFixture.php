<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TeneursFixture
 */
class TeneursFixture extends TestFixture
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
                'produit' => 'Lorem ipsum dolor ',
                'teneur' => 'Lorem ipsum dolor ',
                'statut' => 'Lorem ip',
                'date' => '2024-10-10 16:16:01',
                'iduser' => 1,
            ],
        ];
        parent::init();
    }
}
