<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AgencedouaneFixture
 */
class AgencedouaneFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'agencedouane';
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
                'nomagence' => 'Lorem ipsum dolor sit amet',
                'responsable' => 'Lorem ipsum dolor sit amet',
                'telresp' => 'Lorem ipsum d',
                'emailresp' => 'Lorem ipsum dolor sit amet',
                'agentsite' => 'Lorem ipsum dolor sit amet',
                'telagent' => 'Lorem ipsum d',
                'emailagent' => 'Lorem ipsum dolor sit amet',
                'adresse' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'pays' => 'Lorem ipsum dolor sit amet',
                'statut' => 'Lorem ipsum dolor ',
                'date' => '2024-10-10 16:15:27',
                'iduser' => 1,
            ],
        ];
        parent::init();
    }
}
