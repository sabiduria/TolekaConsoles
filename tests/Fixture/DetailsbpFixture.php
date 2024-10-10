<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DetailsbpFixture
 */
class DetailsbpFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'detailsbp';
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
                'idbp' => 1,
                'numbp' => 'Lorem ipsum dolor sit amet',
                'numlot' => 'Lorem ipsum dolor sit amet',
                'horse' => 'Lorem ipsum dolor ',
                'trailer1' => 'Lorem ipsum dolor ',
                'trailer2' => 'Lorem ipsum dolor ',
                'transporteur' => 'Lorem ipsum dolor sit amet',
                'chauffeur' => 'Lorem ipsum dolor sit amet',
                'passeport' => 'Lorem ipsum dolor ',
                'nationalite' => 'Lorem ipsum dolor sit amet',
                'nbpaquets' => 1,
                'poidsnet' => 1,
                'poidsbrut' => 1,
                'sealdgda' => 'Lorem ipsum dolor sit amet',
                'iduser' => 1,
                'date' => '2024-10-10 16:15:36',
            ],
        ];
        parent::init();
    }
}
