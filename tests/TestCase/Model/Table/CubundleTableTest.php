<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CubundleTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CubundleTable Test Case
 */
class CubundleTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CubundleTable
     */
    protected $Cubundle;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Cubundle',
        'app.AdminSync',
        'app.DeviceSync',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Cubundle') ? [] : ['className' => CubundleTable::class];
        $this->Cubundle = $this->getTableLocator()->get('Cubundle', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Cubundle);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CubundleTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
