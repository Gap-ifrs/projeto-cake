<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ComprasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ComprasTable Test Case
 */
class ComprasTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.compras',
        'app.usuarios',
        'app.usuario_permissoes',
        'app.permissoes',
        'app.vendas',
        'app.clientes',
        'app.venda_produtos',
        'app.produtos',
        'app.fornecedores',
        'app.compra_produtos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Compras') ? [] : ['className' => 'App\Model\Table\ComprasTable'];
        $this->Compras = TableRegistry::get('Compras', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Compras);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
