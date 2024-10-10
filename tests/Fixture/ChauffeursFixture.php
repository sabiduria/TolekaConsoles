<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ChauffeursFixture
 */
class ChauffeursFixture extends TestFixture
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
                'prenomch' => 'Lorem ipsum dolor sit amet',
                'nomch' => 'Lorem ipsum dolor sit amet',
                'telch' => 'Lorem ipsum dolor ',
                'pays' => 'Lorem ipsum dolor sit amet',
                'passeportch' => 'Lorem ipsum dolor sit amet',
                'date' => '2024-10-10 16:15:30',
                'datevisa' => '2024-10-10',
                'datepass' => '2024-10-10',
                'iduser' => 1,
                'statut' => 'Lorem ipsum dolor ',
                'camion' => 'Lorem ipsum dolor ',
            ],
        ];
        parent::init();
    }
}
