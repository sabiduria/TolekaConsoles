<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CheckcocontentFixture
 */
class CheckcocontentFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'checkcocontent';
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
                'imexlot' => 'Lorem ipsum dolor sit amet',
                'bagid' => 'Lorem ipsum dolor sit amet',
                'poids' => 1,
                'h2o' => 1,
                'co' => 1,
                'vpoids' => 1,
                'vh2o' => 1,
                'vco' => 1,
                'produith2o' => 1,
                'produitco' => 1,
                'date' => '2024-10-10 16:15:30',
                'iduser' => 1,
                'loadperiod' => 'Lorem ip',
            ],
        ];
        parent::init();
    }
}
