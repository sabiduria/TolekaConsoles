<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DocumentadmFixture
 */
class DocumentadmFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'documentadm';
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
                'type' => 'Lorem ipsum dolor sit amet',
                'iduser' => 1,
                'datemiseajour' => '2024-10-10 16:15:37',
            ],
        ];
        parent::init();
    }
}
