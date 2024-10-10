<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DisciplineTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DisciplineTable Test Case
 */
class DisciplineTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DisciplineTable
     */
    protected $Discipline;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Discipline',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Discipline') ? [] : ['className' => DisciplineTable::class];
        $this->Discipline = $this->getTableLocator()->get('Discipline', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Discipline);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DisciplineTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
