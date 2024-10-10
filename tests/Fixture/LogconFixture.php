<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LogconFixture
 */
class LogconFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'logcon';
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
                'user' => 'Lorem ipsum dolor sit amet',
                'etat' => 'Lorem ipsum dolor sit amet',
                'date' => '2024-10-10 16:15:46',
                'checked' => 'Lor',
                'jour' => 'Lorem ipsum dolor ',
            ],
        ];
        parent::init();
    }
}
