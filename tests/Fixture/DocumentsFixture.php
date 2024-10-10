<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DocumentsFixture
 */
class DocumentsFixture extends TestFixture
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
                'iduser' => 1,
                'nom_doc' => 'Lorem ipsum dolor sit amet',
                'date' => 'Lorem ipsum dolor ',
            ],
        ];
        parent::init();
    }
}
