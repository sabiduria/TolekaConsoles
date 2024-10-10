<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CamionsFixture
 */
class CamionsFixture extends TestFixture
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
                'trans' => 1,
                'ch' => 1,
                'marque' => 'Lorem ipsum dolor sit amet',
                'type' => 'Lorem ipsum dolor sit amet',
                'horse' => 'Lorem ip',
                'trailer1' => 'Lorem ip',
                'trailer2' => 'Lorem ip',
                'tonnage' => 1,
                'couleur' => 'Lorem ipsum dolor ',
                'statut' => 'Lorem ipsum dolor ',
                'date' => '2024-10-10 16:15:29',
                'iduser' => 1,
            ],
        ];
        parent::init();
    }
}
