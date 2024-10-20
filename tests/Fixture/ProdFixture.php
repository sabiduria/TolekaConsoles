<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProdFixture
 */
class ProdFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'prod';
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
                'produit' => 'Lorem ipsum dolor sit amet',
                'designation' => 'Lorem ipsum dolor sit amet',
                'type' => 'Lorem ipsum dolor sit amet',
                'statut' => 'Lorem ipsum dolor ',
            ],
        ];
        parent::init();
    }
}
