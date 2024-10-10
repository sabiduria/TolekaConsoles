<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TypecamionTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TypecamionTable Test Case
 */
class TypecamionTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TypecamionTable
     */
    protected $Typecamion;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Typecamion',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Typecamion') ? [] : ['className' => TypecamionTable::class];
        $this->Typecamion = $this->getTableLocator()->get('Typecamion', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Typecamion);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TypecamionTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
