<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TachesFixture
 */
class TachesFixture extends TestFixture
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
                'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'statut' => 'Lorem ipsum dolor ',
                'idpj' => 1,
                'datelimite' => '2024-10-10',
                'assignea' => 1,
                'iduser' => 1,
                'iduser2' => 1,
                'date' => '2024-10-10 16:16:00',
                'datemiseajour' => '2024-10-10 16:16:00',
                'commentaireexec' => 'Lorem ipsum dolor sit amet',
                'datecomexec' => '2024-10-10 16:16:00',
                'conclusion' => 'Lorem ipsum dolor sit amet',
                'dateconcl' => '2024-10-10 16:16:00',
                'depenseusd' => 1,
                'revenus' => 1,
                'gainusd' => 1,
                'position' => 1,
            ],
        ];
        parent::init();
    }
}
