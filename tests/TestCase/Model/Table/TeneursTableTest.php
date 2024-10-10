<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TeneursTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TeneursTable Test Case
 */
class TeneursTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TeneursTable
     */
    protected $Teneurs;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Teneurs',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Teneurs') ? [] : ['className' => TeneursTable::class];
        $this->Teneurs = $this->getTableLocator()->get('Teneurs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Teneurs);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TeneursTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
