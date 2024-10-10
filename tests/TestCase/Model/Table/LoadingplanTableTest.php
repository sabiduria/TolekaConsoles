<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LoadingplanTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LoadingplanTable Test Case
 */
class LoadingplanTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LoadingplanTable
     */
    protected $Loadingplan;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Loadingplan',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Loadingplan') ? [] : ['className' => LoadingplanTable::class];
        $this->Loadingplan = $this->getTableLocator()->get('Loadingplan', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Loadingplan);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\LoadingplanTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
