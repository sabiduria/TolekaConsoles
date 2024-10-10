<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Rolead1Table;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Rolead1Table Test Case
 */
class Rolead1TableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\Rolead1Table
     */
    protected $Rolead1;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Rolead1',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Rolead1') ? [] : ['className' => Rolead1Table::class];
        $this->Rolead1 = $this->getTableLocator()->get('Rolead1', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Rolead1);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\Rolead1Table::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
