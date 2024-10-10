<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CouleurcamionTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CouleurcamionTable Test Case
 */
class CouleurcamionTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CouleurcamionTable
     */
    protected $Couleurcamion;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Couleurcamion',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Couleurcamion') ? [] : ['className' => CouleurcamionTable::class];
        $this->Couleurcamion = $this->getTableLocator()->get('Couleurcamion', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Couleurcamion);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CouleurcamionTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
