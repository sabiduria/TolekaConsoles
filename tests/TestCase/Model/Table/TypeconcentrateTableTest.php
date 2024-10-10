<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TypeconcentrateTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TypeconcentrateTable Test Case
 */
class TypeconcentrateTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TypeconcentrateTable
     */
    protected $Typeconcentrate;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Typeconcentrate',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Typeconcentrate') ? [] : ['className' => TypeconcentrateTable::class];
        $this->Typeconcentrate = $this->getTableLocator()->get('Typeconcentrate', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Typeconcentrate);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TypeconcentrateTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
