<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DocumentsadministratifFixture
 */
class DocumentsadministratifFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'documentsadministratif';
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
                'idemp' => 1,
                'matricule' => 'Lorem ipsum dolor ',
                'document' => 'Lorem ipsum dolor sit amet',
                'type' => 'Lorem ipsum dolor sit amet',
                'categorie' => 'Lorem ipsum dolor sit amet',
                'commentaire' => 'Lorem ipsum dolor sit amet',
                'iduser' => 1,
                'datemiseajour' => '2024-10-10 16:15:38',
            ],
        ];
        parent::init();
    }
}
