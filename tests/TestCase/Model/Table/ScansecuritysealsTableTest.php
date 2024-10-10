<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ScansecuritysealsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ScansecuritysealsTable Test Case
 */
class ScansecuritysealsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ScansecuritysealsTable
     */
    protected $Scansecurityseals;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Scansecurityseals',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Scansecurityseals') ? [] : ['className' => ScansecuritysealsTable::class];
        $this->Scansecurityseals = $this->getTableLocator()->get('Scansecurityseals', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Scansecurityseals);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ScansecuritysealsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
