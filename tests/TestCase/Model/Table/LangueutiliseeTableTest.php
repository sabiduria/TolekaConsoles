<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LangueutiliseeTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LangueutiliseeTable Test Case
 */
class LangueutiliseeTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LangueutiliseeTable
     */
    protected $Langueutilisee;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Langueutilisee',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Langueutilisee') ? [] : ['className' => LangueutiliseeTable::class];
        $this->Langueutilisee = $this->getTableLocator()->get('Langueutilisee', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Langueutilisee);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\LangueutiliseeTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
