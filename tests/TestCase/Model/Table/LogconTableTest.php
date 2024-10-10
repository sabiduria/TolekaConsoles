<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LogconTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LogconTable Test Case
 */
class LogconTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LogconTable
     */
    protected $Logcon;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Logcon',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Logcon') ? [] : ['className' => LogconTable::class];
        $this->Logcon = $this->getTableLocator()->get('Logcon', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Logcon);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\LogconTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
