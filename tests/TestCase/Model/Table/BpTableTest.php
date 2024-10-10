<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BpTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BpTable Test Case
 */
class BpTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BpTable
     */
    protected $Bp;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Bp',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Bp') ? [] : ['className' => BpTable::class];
        $this->Bp = $this->getTableLocator()->get('Bp', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Bp);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\BpTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
