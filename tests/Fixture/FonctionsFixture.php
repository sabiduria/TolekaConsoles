<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FonctionsFixture
 */
class FonctionsFixture extends TestFixture
{
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
                'fonction' => 'Lorem ipsum dolor sit amet',
                'iduser' => 1,
                'datemiseajour' => '2024-10-10 16:15:41',
            ],
        ];
        parent::init();
    }
}
