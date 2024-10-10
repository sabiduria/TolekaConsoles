<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
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
                'idrole' => 1,
                'username' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'avatar' => 'Lorem ipsum dolor sit amet',
                'prenom' => 'Lorem ipsum dolor sit amet',
                'nom' => 'Lorem ipsum dolor sit amet',
                'telephone' => 'Lorem ipsum dolor sit a',
                'statut' => 'Lorem ipsum dolor ',
                'dateinscription' => '2024-10-10 16:16:05',
                'iduser' => 1,
                'datemiseajour' => '2024-10-10 16:16:05',
                'sexe' => 'Lorem ipsum dolor ',
                'codeuser' => 'Lorem ipsum dolor sit amet',
                'rolead1' => 1,
                'rolead2' => 1,
                'rolead3' => 1,
                'section' => 1,
                'langue' => 'Lorem ipsum dolor ',
                'synced' => 1,
            ],
        ];
        parent::init();
    }
}
