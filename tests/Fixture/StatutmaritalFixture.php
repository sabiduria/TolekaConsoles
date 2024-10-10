<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StatutmaritalFixture
 */
class StatutmaritalFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'statutmarital';
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
                'statutmarital' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
