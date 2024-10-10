<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CohbagsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CohbagsTable Test Case
 */
class CohbagsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CohbagsTable
     */
    protected $Cohbags;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Cohbags',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Cohbags') ? [] : ['className' => CohbagsTable::class];
        $this->Cohbags = $this->getTableLocator()->get('Cohbags', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Cohbags);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CohbagsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
