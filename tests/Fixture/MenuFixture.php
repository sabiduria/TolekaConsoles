<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MenuFixture
 */
class MenuFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'menu';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idmenu' => 1,
                'idpage' => 1,
                'url' => 'Lorem ipsum dolor sit amet',
                'page' => 'Lorem ipsum dolor sit amet',
                'nommenu' => 'Lorem ipsum dolor sit amet',
                'icone' => 'Lorem ipsum dolor sit amet',
                'iduser' => 1,
                'datemiseajour' => '2024-10-10 16:15:48',
                'statut' => 'Lorem ipsum dolor ',
                'typex' => 'Lorem ipsum dolor sit amet',
                'langue' => 'Lorem ipsum d',
            ],
        ];
        parent::init();
    }
}
