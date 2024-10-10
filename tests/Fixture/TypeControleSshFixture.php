<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TypeControleSshFixture
 */
class TypeControleSshFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'type_controle_ssh';
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
                'controle' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
