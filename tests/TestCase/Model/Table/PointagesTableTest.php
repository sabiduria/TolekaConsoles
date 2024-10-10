<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PointagesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PointagesTable Test Case
 */
class PointagesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PointagesTable
     */
    protected $Pointages;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Pointages',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Pointages') ? [] : ['className' => PointagesTable::class];
        $this->Pointages = $this->getTableLocator()->get('Pointages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Pointages);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PointagesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
