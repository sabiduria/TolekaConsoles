<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NiveauetudeTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NiveauetudeTable Test Case
 */
class NiveauetudeTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\NiveauetudeTable
     */
    protected $Niveauetude;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Niveauetude',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Niveauetude') ? [] : ['className' => NiveauetudeTable::class];
        $this->Niveauetude = $this->getTableLocator()->get('Niveauetude', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Niveauetude);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\NiveauetudeTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
