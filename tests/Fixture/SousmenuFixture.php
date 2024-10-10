<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SousmenuFixture
 */
class SousmenuFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'sousmenu';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idsousmenu' => 1,
                'idmenu' => 1,
                'url' => 'Lorem ipsum dolor sit amet',
                'page' => 'Lorem ipsum dolor sit amet',
                'nomsousmenu' => 'Lorem ipsum dolor sit amet',
                'statut' => 'Lorem ip',
                'iduser' => 1,
                'datemiseajour' => '2024-10-10 16:15:58',
            ],
        ];
        parent::init();
    }
}
