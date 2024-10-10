<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DocumentadmTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DocumentadmTable Test Case
 */
class DocumentadmTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DocumentadmTable
     */
    protected $Documentadm;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Documentadm',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Documentadm') ? [] : ['className' => DocumentadmTable::class];
        $this->Documentadm = $this->getTableLocator()->get('Documentadm', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Documentadm);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DocumentadmTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
