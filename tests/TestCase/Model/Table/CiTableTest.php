<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CiTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CiTable Test Case
 */
class CiTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CiTable
     */
    protected $Ci;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Ci',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Ci') ? [] : ['className' => CiTable::class];
        $this->Ci = $this->getTableLocator()->get('Ci', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Ci);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CiTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
