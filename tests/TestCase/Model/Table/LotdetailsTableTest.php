<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LotdetailsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LotdetailsTable Test Case
 */
class LotdetailsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LotdetailsTable
     */
    protected $Lotdetails;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Lotdetails',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Lotdetails') ? [] : ['className' => LotdetailsTable::class];
        $this->Lotdetails = $this->getTableLocator()->get('Lotdetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Lotdetails);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\LotdetailsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
