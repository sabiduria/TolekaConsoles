<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatutmaritalTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatutmaritalTable Test Case
 */
class StatutmaritalTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\StatutmaritalTable
     */
    protected $Statutmarital;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Statutmarital',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Statutmarital') ? [] : ['className' => StatutmaritalTable::class];
        $this->Statutmarital = $this->getTableLocator()->get('Statutmarital', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Statutmarital);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\StatutmaritalTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
