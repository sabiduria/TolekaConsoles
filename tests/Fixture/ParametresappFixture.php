<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ParametresappFixture
 */
class ParametresappFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'parametresapp';
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
                'nomapp' => 'Lorem ipsum dolor sit amet',
                'slogan' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'logo' => 'Lorem ipsum dolor sit amet',
                'emailapp' => 'Lorem ipsum dolor sit amet',
                'telapp' => 'Lorem ipsum d',
                'nomresp' => 'Lorem ipsum dolor sit amet',
                'telresp' => 'Lorem ipsum d',
                'emailresp' => 'Lorem ipsum dolor sit amet',
                'domaine' => 'Lorem ipsum dolor sit amet',
                'code' => 'L',
                'iduser' => 1,
                'datemiseajour' => '2024-10-10 16:15:50',
                'rccm' => 'Lorem ipsum dolor sit amet',
                'idnat' => 'Lorem ipsum dolor sit amet',
                'numimpot' => 'Lorem ipsum dolor sit amet',
                'numtva' => 'Lorem ipsum dolor sit amet',
                'nomcompagnie' => 'Lorem ipsum dolor sit amet',
                'declaration' => 1,
                'prixdocuments' => 1,
                'banque' => 'Lorem ipsum dolor sit amet',
                'numcomptebanqueusd' => 'Lorem ipsum dolor sit amet',
                'numcomptebanquecdf' => 'Lorem ipsum dolor sit amet',
                'numcompte_airtelmonney' => 'Lorem ipsum dolor ',
                'numcompte_mpesa' => 'Lorem ipsum dolor ',
                'numcompte_orangemonney' => 'Lorem ipsum dolor ',
                'version' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
