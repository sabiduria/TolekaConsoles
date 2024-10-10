<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\QmslotsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\QmslotsTable Test Case
 */
class QmslotsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\QmslotsTable
     */
    protected $Qmslots;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Qmslots',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Qmslots') ? [] : ['className' => QmslotsTable::class];
        $this->Qmslots = $this->getTableLocator()->get('Qmslots', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Qmslots);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\QmslotsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
