<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FormationsFixture
 */
class FormationsFixture extends TestFixture
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
                'iduser' => 1,
                'nomformation' => 'Lorem ipsum dolor sit amet',
                'periode' => 'Lorem ipsum dolor sit amet',
                'etablissement' => 'Lorem ipsum dolor sit amet',
                'lieu' => 'Lorem ipsum dolor sit amet',
                'pieceobtenue' => 'Lorem ipsum dolor sit amet',
                'nompiece' => 'Lorem ipsum dolor sit amet',
                'date' => 'Lorem ipsum dolor ',
            ],
        ];
        parent::init();
    }
}
