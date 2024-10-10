<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TypeControleSshTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TypeControleSshTable Test Case
 */
class TypeControleSshTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TypeControleSshTable
     */
    protected $TypeControleSsh;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.TypeControleSsh',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('TypeControleSsh') ? [] : ['className' => TypeControleSshTable::class];
        $this->TypeControleSsh = $this->getTableLocator()->get('TypeControleSsh', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->TypeControleSsh);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TypeControleSshTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
