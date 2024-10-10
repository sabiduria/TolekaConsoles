<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DisciplineFixture
 */
class DisciplineFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'discipline';
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
                'typesanction' => 'Lorem ipsum dolor sit amet',
                'matricule' => 'Lorem ipsum dolor ',
                'nomagent' => 'Lorem ipsum dolor sit amet',
                'motif' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'datedebut' => '2024-10-10',
                'datefin' => '2024-10-10',
                'document' => 'Lorem ipsum dolor sit amet',
                'iduser' => 1,
                'date' => '2024-10-10 16:15:37',
            ],
        ];
        parent::init();
    }
}
