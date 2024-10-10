<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CamionsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CamionsTable Test Case
 */
class CamionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CamionsTable
     */
    protected $Camions;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Camions',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Camions') ? [] : ['className' => CamionsTable::class];
        $this->Camions = $this->getTableLocator()->get('Camions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Camions);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CamionsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
