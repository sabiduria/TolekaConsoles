<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ChauffeursTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ChauffeursTable Test Case
 */
class ChauffeursTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ChauffeursTable
     */
    protected $Chauffeurs;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Chauffeurs',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Chauffeurs') ? [] : ['className' => ChauffeursTable::class];
        $this->Chauffeurs = $this->getTableLocator()->get('Chauffeurs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Chauffeurs);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ChauffeursTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
