<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClassificationTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClassificationTable Test Case
 */
class ClassificationTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ClassificationTable
     */
    protected $Classification;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Classification',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Classification') ? [] : ['className' => ClassificationTable::class];
        $this->Classification = $this->getTableLocator()->get('Classification', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Classification);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ClassificationTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
