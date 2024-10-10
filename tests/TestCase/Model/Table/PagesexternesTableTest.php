<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PagesexternesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PagesexternesTable Test Case
 */
class PagesexternesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PagesexternesTable
     */
    protected $Pagesexternes;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Pagesexternes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Pagesexternes') ? [] : ['className' => PagesexternesTable::class];
        $this->Pagesexternes = $this->getTableLocator()->get('Pagesexternes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Pagesexternes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PagesexternesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
