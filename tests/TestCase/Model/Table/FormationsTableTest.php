<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FormationsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FormationsTable Test Case
 */
class FormationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FormationsTable
     */
    protected $Formations;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Formations',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Formations') ? [] : ['className' => FormationsTable::class];
        $this->Formations = $this->getTableLocator()->get('Formations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Formations);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\FormationsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
