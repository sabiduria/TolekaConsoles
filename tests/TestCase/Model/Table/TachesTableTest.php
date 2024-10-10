<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TachesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TachesTable Test Case
 */
class TachesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TachesTable
     */
    protected $Taches;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Taches',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Taches') ? [] : ['className' => TachesTable::class];
        $this->Taches = $this->getTableLocator()->get('Taches', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Taches);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TachesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
