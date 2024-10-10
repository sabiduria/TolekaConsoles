<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ChecklistsshTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ChecklistsshTable Test Case
 */
class ChecklistsshTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ChecklistsshTable
     */
    protected $Checklistssh;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Checklistssh',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Checklistssh') ? [] : ['className' => ChecklistsshTable::class];
        $this->Checklistssh = $this->getTableLocator()->get('Checklistssh', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Checklistssh);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ChecklistsshTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
