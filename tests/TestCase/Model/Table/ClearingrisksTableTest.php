<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClearingrisksTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClearingrisksTable Test Case
 */
class ClearingrisksTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ClearingrisksTable
     */
    protected $Clearingrisks;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Clearingrisks',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Clearingrisks') ? [] : ['className' => ClearingrisksTable::class];
        $this->Clearingrisks = $this->getTableLocator()->get('Clearingrisks', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Clearingrisks);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ClearingrisksTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
