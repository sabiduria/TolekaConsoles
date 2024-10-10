<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SafetytopicTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SafetytopicTable Test Case
 */
class SafetytopicTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SafetytopicTable
     */
    protected $Safetytopic;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Safetytopic',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Safetytopic') ? [] : ['className' => SafetytopicTable::class];
        $this->Safetytopic = $this->getTableLocator()->get('Safetytopic', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Safetytopic);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SafetytopicTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
