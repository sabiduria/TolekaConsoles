<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ChargementsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ChargementsTable Test Case
 */
class ChargementsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ChargementsTable
     */
    protected $Chargements;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Chargements',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Chargements') ? [] : ['className' => ChargementsTable::class];
        $this->Chargements = $this->getTableLocator()->get('Chargements', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Chargements);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ChargementsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
