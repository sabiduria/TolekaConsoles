<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TypeitemTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TypeitemTable Test Case
 */
class TypeitemTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TypeitemTable
     */
    protected $Typeitem;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Typeitem',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Typeitem') ? [] : ['className' => TypeitemTable::class];
        $this->Typeitem = $this->getTableLocator()->get('Typeitem', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Typeitem);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TypeitemTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
