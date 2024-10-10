<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DetailsworkflowFixture
 */
class DetailsworkflowFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'detailsworkflow';
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
                'idworkflow' => 1,
                'rolecmd' => 1,
                'action' => 'Lorem ipsum dolor sit amet',
                'numsequence' => 1,
                'iduser' => 1,
                'date' => '2024-10-10 16:15:36',
            ],
        ];
        parent::init();
    }
}
