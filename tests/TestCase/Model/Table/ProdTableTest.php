<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProdTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProdTable Test Case
 */
class ProdTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProdTable
     */
    protected $Prod;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Prod',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Prod') ? [] : ['className' => ProdTable::class];
        $this->Prod = $this->getTableLocator()->get('Prod', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Prod);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProdTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
