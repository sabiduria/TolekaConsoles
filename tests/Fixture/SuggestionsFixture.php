<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SuggestionsFixture
 */
class SuggestionsFixture extends TestFixture
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
                'suggestion' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'iduser' => 1,
                'date' => '2024-10-10 16:16:00',
                'reponse' => 'Lorem ipsum dolor sit amet',
                'iduser2' => 1,
                'date2' => '2024-10-10 16:16:00',
                'statut' => 'Lorem ipsum dolor ',
            ],
        ];
        parent::init();
    }
}
