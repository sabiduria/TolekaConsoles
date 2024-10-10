<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * Sousmenu2Fixture
 */
class Sousmenu2Fixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'sousmenu2';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idsousmenu2' => 1,
                'idsousmenu' => 1,
                'url' => 'Lorem ipsum dolor sit amet',
                'page' => 'Lorem ipsum dolor sit amet',
                'nomsousmenu2' => 'Lorem ipsum dolor sit amet',
                'statut' => 'Lorem ip',
                'iduser' => 1,
                'datemiseajour' => '2024-10-10 16:15:59',
                'idpage' => 1,
                'nomsousmenu2en' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
