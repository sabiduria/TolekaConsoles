<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CompositesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CompositesTable Test Case
 */
class CompositesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CompositesTable
     */
    protected $Composites;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Composites',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Composites') ? [] : ['className' => CompositesTable::class];
        $this->Composites = $this->getTableLocator()->get('Composites', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Composites);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CompositesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
