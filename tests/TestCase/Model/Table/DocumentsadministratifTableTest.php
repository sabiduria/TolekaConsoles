<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DocumentsadministratifTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DocumentsadministratifTable Test Case
 */
class DocumentsadministratifTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DocumentsadministratifTable
     */
    protected $Documentsadministratif;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Documentsadministratif',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Documentsadministratif') ? [] : ['className' => DocumentsadministratifTable::class];
        $this->Documentsadministratif = $this->getTableLocator()->get('Documentsadministratif', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Documentsadministratif);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DocumentsadministratifTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
