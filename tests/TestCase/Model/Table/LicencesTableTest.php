<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LicencesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LicencesTable Test Case
 */
class LicencesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LicencesTable
     */
    protected $Licences;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Licences',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Licences') ? [] : ['className' => LicencesTable::class];
        $this->Licences = $this->getTableLocator()->get('Licences', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Licences);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\LicencesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
