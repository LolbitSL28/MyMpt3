<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ComentariosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ComentariosTable Test Case
 */
class ComentariosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ComentariosTable
     */
    protected $Comentarios;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Comentarios',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Comentarios') ? [] : ['className' => ComentariosTable::class];
        $this->Comentarios = $this->getTableLocator()->get('Comentarios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Comentarios);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ComentariosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
