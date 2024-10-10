<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AdminSyncTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AdminSyncTable Test Case
 */
class AdminSyncTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AdminSyncTable
     */
    protected $AdminSync;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.AdminSync',
        'app.Cohbags',
        'app.Cohlots',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('AdminSync') ? [] : ['className' => AdminSyncTable::class];
        $this->AdminSync = $this->getTableLocator()->get('AdminSync', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->AdminSync);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AdminSyncTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\AdminSyncTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
