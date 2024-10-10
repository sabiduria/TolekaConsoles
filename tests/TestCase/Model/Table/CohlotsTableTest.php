<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CohlotsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CohlotsTable Test Case
 */
class CohlotsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CohlotsTable
     */
    protected $Cohlots;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Cohlots',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Cohlots') ? [] : ['className' => CohlotsTable::class];
        $this->Cohlots = $this->getTableLocator()->get('Cohlots', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Cohlots);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CohlotsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
