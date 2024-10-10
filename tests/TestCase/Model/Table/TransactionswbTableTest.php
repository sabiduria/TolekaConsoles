<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TransactionswbTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TransactionswbTable Test Case
 */
class TransactionswbTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TransactionswbTable
     */
    protected $Transactionswb;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Transactionswb',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Transactionswb') ? [] : ['className' => TransactionswbTable::class];
        $this->Transactionswb = $this->getTableLocator()->get('Transactionswb', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Transactionswb);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TransactionswbTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
