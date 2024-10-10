<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DetailslotFixture
 */
class DetailslotFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'detailslot';
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
                'numlot' => 'Lorem ipsum dolor sit amet',
                'idbag' => 1,
                'bagid' => 'Lorem ipsum dolor sit amet',
                'h20' => 'Lorem ip',
                'co' => 'Lorem ipsum dolor ',
                'u' => 'Lorem ipsum dolor ',
                'mg' => 'Lorem ipsum dolor ',
                'mn' => 'Lorem ipsum dolor ',
                'ni' => 'Lorem ipsum dolor ',
                'fe' => 'Lorem ipsum dolor ',
                'ca' => 'Lorem ipsum dolor ',
                'si' => 'Lorem ipsum dolor ',
                'al' => 'Lorem ipsum dolor ',
                'cu' => 'Lorem ipsum dolor ',
                'cocont' => 'Lorem ipsum dolor ',
                'spec' => 'Lorem ipsum dolor sit amet',
                'user' => 1,
                'datecrea' => '2024-10-10 16:15:36',
                'dateprod' => 'Lorem ipsum dolor ',
                'poids' => 'Lorem ipsum dolor ',
                'composite' => 'Lorem ipsum dolor sit amet',
                'zn' => 'Lorem ipsum dolor ',
            ],
        ];
        parent::init();
    }
}
