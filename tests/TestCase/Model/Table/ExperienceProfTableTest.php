<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ExperienceProfTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ExperienceProfTable Test Case
 */
class ExperienceProfTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ExperienceProfTable
     */
    protected $ExperienceProf;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.ExperienceProf',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ExperienceProf') ? [] : ['className' => ExperienceProfTable::class];
        $this->ExperienceProf = $this->getTableLocator()->get('ExperienceProf', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ExperienceProf);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ExperienceProfTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
