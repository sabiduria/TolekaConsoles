<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NationaliteTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NationaliteTable Test Case
 */
class NationaliteTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\NationaliteTable
     */
    protected $Nationalite;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Nationalite',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Nationalite') ? [] : ['className' => NationaliteTable::class];
        $this->Nationalite = $this->getTableLocator()->get('Nationalite', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Nationalite);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\NationaliteTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
