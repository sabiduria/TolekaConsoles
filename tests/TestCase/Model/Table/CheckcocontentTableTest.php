<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CheckcocontentTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CheckcocontentTable Test Case
 */
class CheckcocontentTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CheckcocontentTable
     */
    protected $Checkcocontent;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Checkcocontent',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Checkcocontent') ? [] : ['className' => CheckcocontentTable::class];
        $this->Checkcocontent = $this->getTableLocator()->get('Checkcocontent', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Checkcocontent);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CheckcocontentTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
