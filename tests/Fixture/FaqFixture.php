<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FaqFixture
 */
class FaqFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'faq';
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
                'question' => 'Lorem ipsum dolor sit amet',
                'reponse' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'questionfr' => 'Lorem ipsum dolor sit amet',
                'reponsefr' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'date' => '2024-10-10 16:15:40',
                'datemiseajour' => '2024-10-10 16:15:40',
                'iduser' => 1,
                'idagent' => 1,
                'statut' => 'Lorem ipsum dolor ',
            ],
        ];
        parent::init();
    }
}
