<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DetailslotTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DetailslotTable Test Case
 */
class DetailslotTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DetailslotTable
     */
    protected $Detailslot;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Detailslot',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Detailslot') ? [] : ['className' => DetailslotTable::class];
        $this->Detailslot = $this->getTableLocator()->get('Detailslot', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Detailslot);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DetailslotTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
