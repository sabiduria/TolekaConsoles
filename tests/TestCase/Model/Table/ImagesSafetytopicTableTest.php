<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ImagesSafetytopicTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ImagesSafetytopicTable Test Case
 */
class ImagesSafetytopicTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ImagesSafetytopicTable
     */
    protected $ImagesSafetytopic;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.ImagesSafetytopic',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ImagesSafetytopic') ? [] : ['className' => ImagesSafetytopicTable::class];
        $this->ImagesSafetytopic = $this->getTableLocator()->get('ImagesSafetytopic', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ImagesSafetytopic);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ImagesSafetytopicTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
