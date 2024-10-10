<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Sousmenu2Table;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Sousmenu2Table Test Case
 */
class Sousmenu2TableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\Sousmenu2Table
     */
    protected $Sousmenu2;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Sousmenu2',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Sousmenu2') ? [] : ['className' => Sousmenu2Table::class];
        $this->Sousmenu2 = $this->getTableLocator()->get('Sousmenu2', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Sousmenu2);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\Sousmenu2Table::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
