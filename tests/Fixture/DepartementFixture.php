<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DepartementFixture
 */
class DepartementFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'departement';
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
                'nomdpt' => 'Lorem ipsum dolor sit amet',
                'iduser' => 1,
                'date' => '2024-10-10 16:15:35',
                'statut' => 'Lorem ip',
            ],
        ];
        parent::init();
    }
}
