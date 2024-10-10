<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LoadingplanFixture
 */
class LoadingplanFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'loadingplan';
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
                'idprea' => 1,
                'tonnagetoload' => 1,
                'produit' => 'Lorem ipsum dolor sit amet',
                'exploaddate' => '2024-10-10',
                'date' => '2024-10-10 16:15:45',
                'iduser' => 1,
            ],
        ];
        parent::init();
    }
}
