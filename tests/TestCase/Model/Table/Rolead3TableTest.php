<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Rolead3Table;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Rolead3Table Test Case
 */
class Rolead3TableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\Rolead3Table
     */
    protected $Rolead3;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Rolead3',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Rolead3') ? [] : ['className' => Rolead3Table::class];
        $this->Rolead3 = $this->getTableLocator()->get('Rolead3', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Rolead3);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\Rolead3Table::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
