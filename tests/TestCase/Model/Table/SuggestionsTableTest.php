<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SuggestionsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SuggestionsTable Test Case
 */
class SuggestionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SuggestionsTable
     */
    protected $Suggestions;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Suggestions',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Suggestions') ? [] : ['className' => SuggestionsTable::class];
        $this->Suggestions = $this->getTableLocator()->get('Suggestions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Suggestions);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SuggestionsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
