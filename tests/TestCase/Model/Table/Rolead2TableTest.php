<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Rolead2Table;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Rolead2Table Test Case
 */
class Rolead2TableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\Rolead2Table
     */
    protected $Rolead2;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Rolead2',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Rolead2') ? [] : ['className' => Rolead2Table::class];
        $this->Rolead2 = $this->getTableLocator()->get('Rolead2', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Rolead2);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\Rolead2Table::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
