<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SousmenuTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SousmenuTable Test Case
 */
class SousmenuTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SousmenuTable
     */
    protected $Sousmenu;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Sousmenu',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Sousmenu') ? [] : ['className' => SousmenuTable::class];
        $this->Sousmenu = $this->getTableLocator()->get('Sousmenu', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Sousmenu);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SousmenuTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
