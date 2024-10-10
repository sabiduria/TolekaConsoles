<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PrealerteTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PrealerteTable Test Case
 */
class PrealerteTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PrealerteTable
     */
    protected $Prealerte;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Prealerte',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Prealerte') ? [] : ['className' => PrealerteTable::class];
        $this->Prealerte = $this->getTableLocator()->get('Prealerte', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Prealerte);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PrealerteTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
