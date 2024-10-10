<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SafetytopicFixture
 */
class SafetytopicFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'safetytopic';
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
                'sujet' => 'Lorem ipsum dolor sit amet',
                'commentaires' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'lieu' => 'Lorem ipsum dolor sit amet',
                'datetopic' => '2024-10-10',
                'iduser' => 1,
                'date' => '2024-10-10 16:15:56',
            ],
        ];
        parent::init();
    }
}
