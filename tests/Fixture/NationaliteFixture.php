<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * NationaliteFixture
 */
class NationaliteFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'nationalite';
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
                'nationalite' => 'Lorem ipsum dolor sit amet',
                'langue' => 'Lorem ipsum d',
                'statut' => 'Lorem ipsum dolor ',
                'iduser' => 1,
                'datemiseajour' => '2024-10-10 16:15:49',
            ],
        ];
        parent::init();
    }
}
