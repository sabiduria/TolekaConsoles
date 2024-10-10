<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AgentFixture
 */
class AgentFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'agent';
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
                'matricule' => 'Lorem ip',
                'prenom' => 'Lorem ipsum dolor ',
                'nom' => 'Lorem ipsum dolor sit amet',
                'datenaissance' => '2024-10-10',
                'dateengagement' => '2024-10-10',
                'genre' => 'L',
                'fonction' => 'Lorem ipsum dolor sit amet',
                'equipe' => 'Lorem ipsum dolor ',
                'reportto' => 'Lorem ipsum dolor sit amet',
                'telephone' => 'Lorem ipsum d',
                'email' => 'Lorem ipsum dolor sit amet',
                'statut' => 'Lorem ip',
            ],
        ];
        parent::init();
    }
}
