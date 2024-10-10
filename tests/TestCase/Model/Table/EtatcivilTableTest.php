<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EtatcivilTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EtatcivilTable Test Case
 */
class EtatcivilTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EtatcivilTable
     */
    protected $Etatcivil;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Etatcivil',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Etatcivil') ? [] : ['className' => EtatcivilTable::class];
        $this->Etatcivil = $this->getTableLocator()->get('Etatcivil', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Etatcivil);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\EtatcivilTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
