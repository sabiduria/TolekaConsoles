<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CiFixture
 */
class CiFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'ci';
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
                'lotnumber' => 'Lorem ipsum dolor sit amet',
                'numimex' => 'Lorem ipsum dolor sit amet',
                'cost' => 1,
                'horse' => 'Lorem ipsum dolor sit amet',
                'transporter' => 'Lorem ipsum dolor sit amet',
                'destination' => 'Lorem ipsum dolor sit amet',
                'date' => '2024-10-10 16:15:31',
            ],
        ];
        parent::init();
    }
}
