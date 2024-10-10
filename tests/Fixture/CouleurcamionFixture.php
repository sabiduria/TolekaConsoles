<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CouleurcamionFixture
 */
class CouleurcamionFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'couleurcamion';
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
                'couleur' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
