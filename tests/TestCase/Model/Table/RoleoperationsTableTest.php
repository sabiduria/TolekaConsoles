<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RoleoperationsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RoleoperationsTable Test Case
 */
class RoleoperationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RoleoperationsTable
     */
    protected $Roleoperations;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Roleoperations',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Roleoperations') ? [] : ['className' => RoleoperationsTable::class];
        $this->Roleoperations = $this->getTableLocator()->get('Roleoperations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Roleoperations);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\RoleoperationsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
