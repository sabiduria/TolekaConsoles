<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EtudesfaitesFixture
 */
class EtudesfaitesFixture extends TestFixture
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
                'periode' => 'Lorem ipsum dolor sit amet',
                'ecole' => 'Lorem ipsum dolor sit amet',
                'classes' => 'Lorem ipsum dolor sit amet',
                'ville' => 'Lorem ipsum dolor sit amet',
                'pieceobtenue' => 'Lorem ipsum dolor sit amet',
                'dateenregistrement' => 'Lorem ipsum dolor ',
            ],
        ];
        parent::init();
    }
}
