<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ImexlotupdatesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ImexlotupdatesTable Test Case
 */
class ImexlotupdatesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ImexlotupdatesTable
     */
    protected $Imexlotupdates;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Imexlotupdates',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Imexlotupdates') ? [] : ['className' => ImexlotupdatesTable::class];
        $this->Imexlotupdates = $this->getTableLocator()->get('Imexlotupdates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Imexlotupdates);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ImexlotupdatesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
