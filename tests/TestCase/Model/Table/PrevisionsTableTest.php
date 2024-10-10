<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PrevisionsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PrevisionsTable Test Case
 */
class PrevisionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PrevisionsTable
     */
    protected $Previsions;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Previsions',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Previsions') ? [] : ['className' => PrevisionsTable::class];
        $this->Previsions = $this->getTableLocator()->get('Previsions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Previsions);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PrevisionsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
