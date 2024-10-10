<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PhotosbagsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PhotosbagsTable Test Case
 */
class PhotosbagsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PhotosbagsTable
     */
    protected $Photosbags;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Photosbags',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Photosbags') ? [] : ['className' => PhotosbagsTable::class];
        $this->Photosbags = $this->getTableLocator()->get('Photosbags', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Photosbags);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PhotosbagsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
