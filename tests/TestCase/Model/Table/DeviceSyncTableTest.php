<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DeviceSyncTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DeviceSyncTable Test Case
 */
class DeviceSyncTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DeviceSyncTable
     */
    protected $DeviceSync;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.DeviceSync',
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
        $config = $this->getTableLocator()->exists('DeviceSync') ? [] : ['className' => DeviceSyncTable::class];
        $this->DeviceSync = $this->getTableLocator()->get('DeviceSync', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->DeviceSync);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DeviceSyncTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\DeviceSyncTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
