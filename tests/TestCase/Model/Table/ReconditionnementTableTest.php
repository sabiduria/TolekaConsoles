<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ReconditionnementTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ReconditionnementTable Test Case
 */
class ReconditionnementTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ReconditionnementTable
     */
    protected $Reconditionnement;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Reconditionnement',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Reconditionnement') ? [] : ['className' => ReconditionnementTable::class];
        $this->Reconditionnement = $this->getTableLocator()->get('Reconditionnement', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Reconditionnement);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ReconditionnementTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
