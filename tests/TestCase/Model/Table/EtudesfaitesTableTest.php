<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EtudesfaitesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EtudesfaitesTable Test Case
 */
class EtudesfaitesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EtudesfaitesTable
     */
    protected $Etudesfaites;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Etudesfaites',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Etudesfaites') ? [] : ['className' => EtudesfaitesTable::class];
        $this->Etudesfaites = $this->getTableLocator()->get('Etudesfaites', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Etudesfaites);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\EtudesfaitesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
