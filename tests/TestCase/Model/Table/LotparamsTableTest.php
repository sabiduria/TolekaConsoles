<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LotparamsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LotparamsTable Test Case
 */
class LotparamsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LotparamsTable
     */
    protected $Lotparams;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Lotparams',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Lotparams') ? [] : ['className' => LotparamsTable::class];
        $this->Lotparams = $this->getTableLocator()->get('Lotparams', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Lotparams);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\LotparamsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
