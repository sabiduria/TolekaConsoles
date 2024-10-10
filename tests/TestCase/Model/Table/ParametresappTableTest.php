<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ParametresappTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ParametresappTable Test Case
 */
class ParametresappTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ParametresappTable
     */
    protected $Parametresapp;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Parametresapp',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Parametresapp') ? [] : ['className' => ParametresappTable::class];
        $this->Parametresapp = $this->getTableLocator()->get('Parametresapp', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Parametresapp);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ParametresappTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
