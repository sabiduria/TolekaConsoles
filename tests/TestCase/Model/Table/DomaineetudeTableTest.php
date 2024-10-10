<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DomaineetudeTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DomaineetudeTable Test Case
 */
class DomaineetudeTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DomaineetudeTable
     */
    protected $Domaineetude;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Domaineetude',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Domaineetude') ? [] : ['className' => DomaineetudeTable::class];
        $this->Domaineetude = $this->getTableLocator()->get('Domaineetude', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Domaineetude);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DomaineetudeTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
