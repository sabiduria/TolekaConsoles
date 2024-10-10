<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TripTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TripTable Test Case
 */
class TripTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TripTable
     */
    protected $Trip;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Trip',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Trip') ? [] : ['className' => TripTable::class];
        $this->Trip = $this->getTableLocator()->get('Trip', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Trip);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TripTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
