<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ForecastFixture
 */
class ForecastFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'forecast';
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
                'moisgestion' => 'Lorem ipsum dolor ',
                'scancu' => 1,
                'scancoh' => 1,
                'charcu' => 1,
                'charcoh' => 1,
                'doccu' => 1,
                'doccoh' => 1,
                'dispcu' => 1,
                'dispcoh' => 1,
                'iduser' => 1,
                'date' => '2024-10-10 16:15:41',
            ],
        ];
        parent::init();
    }
}
