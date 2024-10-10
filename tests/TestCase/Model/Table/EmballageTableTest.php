<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmballageTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmballageTable Test Case
 */
class EmballageTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EmballageTable
     */
    protected $Emballage;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Emballage',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Emballage') ? [] : ['className' => EmballageTable::class];
        $this->Emballage = $this->getTableLocator()->get('Emballage', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Emballage);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\EmballageTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
