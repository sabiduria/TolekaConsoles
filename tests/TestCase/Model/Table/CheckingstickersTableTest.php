<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CheckingstickersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CheckingstickersTable Test Case
 */
class CheckingstickersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CheckingstickersTable
     */
    protected $Checkingstickers;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Checkingstickers',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Checkingstickers') ? [] : ['className' => CheckingstickersTable::class];
        $this->Checkingstickers = $this->getTableLocator()->get('Checkingstickers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Checkingstickers);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CheckingstickersTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
