<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GprealerteTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GprealerteTable Test Case
 */
class GprealerteTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GprealerteTable
     */
    protected $Gprealerte;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Gprealerte',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Gprealerte') ? [] : ['className' => GprealerteTable::class];
        $this->Gprealerte = $this->getTableLocator()->get('Gprealerte', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Gprealerte);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\GprealerteTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
