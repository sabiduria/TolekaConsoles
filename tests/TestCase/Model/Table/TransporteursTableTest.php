<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TransporteursTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TransporteursTable Test Case
 */
class TransporteursTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TransporteursTable
     */
    protected $Transporteurs;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Transporteurs',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Transporteurs') ? [] : ['className' => TransporteursTable::class];
        $this->Transporteurs = $this->getTableLocator()->get('Transporteurs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Transporteurs);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TransporteursTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
