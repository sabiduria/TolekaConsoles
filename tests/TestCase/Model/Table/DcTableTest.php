<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DcTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DcTable Test Case
 */
class DcTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DcTable
     */
    protected $Dc;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Dc',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Dc') ? [] : ['className' => DcTable::class];
        $this->Dc = $this->getTableLocator()->get('Dc', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Dc);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DcTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
