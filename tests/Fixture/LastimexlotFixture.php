<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LastimexlotFixture
 */
class LastimexlotFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'lastimexlot';
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
                'produit' => 'Lorem ipsum dolor sit amet',
                'unit' => 'Lorem ip',
                'lastimexlot' => 'Lorem ipsum dolor sit amet',
                'newlastnum' => 1,
                'used' => 1,
            ],
        ];
        parent::init();
    }
}
