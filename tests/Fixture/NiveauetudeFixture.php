<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * NiveauetudeFixture
 */
class NiveauetudeFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'niveauetude';
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
                'niveau' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet',
                'iduser' => 1,
                'datemiseajour' => '2024-10-10 16:15:49',
            ],
        ];
        parent::init();
    }
}
