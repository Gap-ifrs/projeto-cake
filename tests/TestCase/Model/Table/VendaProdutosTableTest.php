<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VendaProdutosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VendaProdutosTable Test Case
 */
class VendaProdutosTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.venda_produtos',
        'app.vendas',
        'app.usuarios',
        'app.compras',
        'app.fornecedores',
        'app.compra_produtos',
        'app.produtos',
        'app.usuario_permissoes',
        'app.permissoes',
        'app.clientes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('VendaProdutos') ? [] : ['className' => 'App\Model\Table\VendaProdutosTable'];
        $this->VendaProdutos = TableRegistry::get('VendaProdutos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->VendaProdutos);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
