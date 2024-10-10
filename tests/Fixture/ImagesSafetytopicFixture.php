<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ImagesSafetytopicFixture
 */
class ImagesSafetytopicFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'images_safetytopic';
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
                'idtopic' => 1,
                'image' => 'Lorem ipsum dolor sit amet',
                'iduser' => 1,
                'date' => '2024-10-10 16:15:42',
            ],
        ];
        parent::init();
    }
}
