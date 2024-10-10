<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LcTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LcTable Test Case
 */
class LcTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LcTable
     */
    protected $Lc;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Lc',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Lc') ? [] : ['className' => LcTable::class];
        $this->Lc = $this->getTableLocator()->get('Lc', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Lc);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\LcTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
