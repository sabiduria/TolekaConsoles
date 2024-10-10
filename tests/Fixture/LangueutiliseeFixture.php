<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LangueutiliseeFixture
 */
class LangueutiliseeFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'langueutilisee';
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
                'langue' => 'Lo',
                'iduser' => 1,
                'datemiseajour' => '2024-10-10 16:15:44',
            ],
        ];
        parent::init();
    }
}
