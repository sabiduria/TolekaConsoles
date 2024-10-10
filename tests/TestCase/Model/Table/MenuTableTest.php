<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MenuTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MenuTable Test Case
 */
class MenuTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MenuTable
     */
    protected $Menu;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Menu',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Menu') ? [] : ['className' => MenuTable::class];
        $this->Menu = $this->getTableLocator()->get('Menu', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Menu);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MenuTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
