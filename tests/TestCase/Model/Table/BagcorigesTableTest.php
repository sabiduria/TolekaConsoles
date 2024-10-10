<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BagcorigesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BagcorigesTable Test Case
 */
class BagcorigesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BagcorigesTable
     */
    protected $Bagcoriges;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Bagcoriges',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Bagcoriges') ? [] : ['className' => BagcorigesTable::class];
        $this->Bagcoriges = $this->getTableLocator()->get('Bagcoriges', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Bagcoriges);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\BagcorigesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
