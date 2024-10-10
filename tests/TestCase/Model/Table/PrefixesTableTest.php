<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PrefixesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PrefixesTable Test Case
 */
class PrefixesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PrefixesTable
     */
    protected $Prefixes;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Prefixes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Prefixes') ? [] : ['className' => PrefixesTable::class];
        $this->Prefixes = $this->getTableLocator()->get('Prefixes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Prefixes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PrefixesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
