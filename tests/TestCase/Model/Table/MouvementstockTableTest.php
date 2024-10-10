<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MouvementstockTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MouvementstockTable Test Case
 */
class MouvementstockTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MouvementstockTable
     */
    protected $Mouvementstock;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Mouvementstock',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Mouvementstock') ? [] : ['className' => MouvementstockTable::class];
        $this->Mouvementstock = $this->getTableLocator()->get('Mouvementstock', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Mouvementstock);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MouvementstockTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
