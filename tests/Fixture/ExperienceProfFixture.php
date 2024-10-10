<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ExperienceProfFixture
 */
class ExperienceProfFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'experience_prof';
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
                'periode' => 'Lorem ipsum dolor ',
                'entreprise' => 'Lorem ipsum dolor sit amet',
                'fonction' => 'Lorem ipsum dolor sit amet',
                'ville' => 'Lorem ipsum dolor sit amet',
                'raison' => 'Lorem ipsum dolor sit amet',
                'date' => 'Lorem ipsum dolor ',
            ],
        ];
        parent::init();
    }
}
