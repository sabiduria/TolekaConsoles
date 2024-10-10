<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ArticlesFixture
 */
class ArticlesFixture extends TestFixture
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
                'designation' => 'Lorem ipsum dolor sit amet',
                'type' => 'Lorem ipsum dolor sit amet',
                'utilite' => 'Lorem ipsum dolor sit amet',
                'codemagasin' => 'Lorem ipsum dolor sit amet',
                'coutmagasin' => 'Lorem ipsum dolor ',
                'qtestock' => 1,
                'seuil' => 1,
                'date' => '2024-10-10 16:15:28',
                'iduser' => 1,
                'statut' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
