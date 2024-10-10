<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DetailsworkflowTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DetailsworkflowTable Test Case
 */
class DetailsworkflowTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DetailsworkflowTable
     */
    protected $Detailsworkflow;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Detailsworkflow',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Detailsworkflow') ? [] : ['className' => DetailsworkflowTable::class];
        $this->Detailsworkflow = $this->getTableLocator()->get('Detailsworkflow', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Detailsworkflow);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DetailsworkflowTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
