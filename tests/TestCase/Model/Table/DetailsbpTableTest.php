<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DetailsbpTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DetailsbpTable Test Case
 */
class DetailsbpTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DetailsbpTable
     */
    protected $Detailsbp;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Detailsbp',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Detailsbp') ? [] : ['className' => DetailsbpTable::class];
        $this->Detailsbp = $this->getTableLocator()->get('Detailsbp', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Detailsbp);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DetailsbpTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
