<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PointagesFixture
 */
class PointagesFixture extends TestFixture
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
                'codepointage' => 'Lor',
                'description' => 'Lorem ipsum dolor sit amet',
                'type' => 'Lorem ipsum dolor sit amet',
                'coefficient' => 1,
                'iduser' => 1,
                'datemiseajour' => '2024-10-10 16:15:51',
                'descriptionen' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
