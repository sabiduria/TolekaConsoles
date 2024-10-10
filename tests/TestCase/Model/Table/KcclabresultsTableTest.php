<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\KcclabresultsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\KcclabresultsTable Test Case
 */
class KcclabresultsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\KcclabresultsTable
     */
    protected $Kcclabresults;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Kcclabresults',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Kcclabresults') ? [] : ['className' => KcclabresultsTable::class];
        $this->Kcclabresults = $this->getTableLocator()->get('Kcclabresults', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Kcclabresults);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\KcclabresultsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
