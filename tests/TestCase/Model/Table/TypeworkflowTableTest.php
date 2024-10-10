<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TypeworkflowTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TypeworkflowTable Test Case
 */
class TypeworkflowTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TypeworkflowTable
     */
    protected $Typeworkflow;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Typeworkflow',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Typeworkflow') ? [] : ['className' => TypeworkflowTable::class];
        $this->Typeworkflow = $this->getTableLocator()->get('Typeworkflow', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Typeworkflow);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TypeworkflowTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
