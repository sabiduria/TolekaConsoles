<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DomaineetudeFixture
 */
class DomaineetudeFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'domaineetude';
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
                'domaine' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
