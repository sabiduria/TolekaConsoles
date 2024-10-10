<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LogdbTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LogdbTable Test Case
 */
class LogdbTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LogdbTable
     */
    protected $Logdb;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Logdb',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Logdb') ? [] : ['className' => LogdbTable::class];
        $this->Logdb = $this->getTableLocator()->get('Logdb', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Logdb);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\LogdbTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
