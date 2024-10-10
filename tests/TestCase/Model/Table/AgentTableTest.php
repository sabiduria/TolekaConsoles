<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AgentTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AgentTable Test Case
 */
class AgentTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AgentTable
     */
    protected $Agent;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Agent',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Agent') ? [] : ['className' => AgentTable::class];
        $this->Agent = $this->getTableLocator()->get('Agent', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Agent);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AgentTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
