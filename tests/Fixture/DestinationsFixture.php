<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DestinationsFixture
 */
class DestinationsFixture extends TestFixture
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
                'pays' => 'Lorem ipsum dolor sit amet',
                'destination' => 'Lorem ipsum dolor sit amet',
                'corridor' => 'Lorem ipsum dolor sit amet',
                'codeprea' => 'Lorem ipsum dolor ',
                'produit' => 'Lorem ip',
                'tonnagerequis' => 1,
                'tonnageenvoye' => 1,
                'tonnagerestant' => 1,
                'date' => '2024-10-10 16:15:35',
                'iduser' => 1,
                'statut' => 'Lorem ip',
                'consignee' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            ],
        ];
        parent::init();
    }
}
