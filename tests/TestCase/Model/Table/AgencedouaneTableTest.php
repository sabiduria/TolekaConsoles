<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AgencedouaneTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AgencedouaneTable Test Case
 */
class AgencedouaneTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AgencedouaneTable
     */
    protected $Agencedouane;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Agencedouane',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Agencedouane') ? [] : ['className' => AgencedouaneTable::class];
        $this->Agencedouane = $this->getTableLocator()->get('Agencedouane', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Agencedouane);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AgencedouaneTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
