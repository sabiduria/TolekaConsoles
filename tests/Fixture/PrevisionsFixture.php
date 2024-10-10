<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PrevisionsFixture
 */
class PrevisionsFixture extends TestFixture
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
                'mois' => 'Lorem ip',
                'produit' => 'Lorem ip',
                'tonnagemens' => 1,
                'tonnagejour' => 1,
                'camionsmens' => 1,
                'camionsjour' => 1,
            ],
        ];
        parent::init();
    }
}
