<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MoisgestionTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MoisgestionTable Test Case
 */
class MoisgestionTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MoisgestionTable
     */
    protected $Moisgestion;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Moisgestion',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Moisgestion') ? [] : ['className' => MoisgestionTable::class];
        $this->Moisgestion = $this->getTableLocator()->get('Moisgestion', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Moisgestion);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MoisgestionTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
