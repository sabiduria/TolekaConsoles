<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsermenuTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsermenuTable Test Case
 */
class UsermenuTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UsermenuTable
     */
    protected $Usermenu;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Usermenu',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Usermenu') ? [] : ['className' => UsermenuTable::class];
        $this->Usermenu = $this->getTableLocator()->get('Usermenu', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Usermenu);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\UsermenuTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
