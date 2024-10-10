<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DestinationsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DestinationsTable Test Case
 */
class DestinationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DestinationsTable
     */
    protected $Destinations;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Destinations',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Destinations') ? [] : ['className' => DestinationsTable::class];
        $this->Destinations = $this->getTableLocator()->get('Destinations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Destinations);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DestinationsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
