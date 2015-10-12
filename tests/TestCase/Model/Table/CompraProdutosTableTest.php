<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CompraProdutosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CompraProdutosTable Test Case
 */
class CompraProdutosTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.compra_produtos',
        'app.compras',
        'app.usuarios',
        'app.usuario_permissoes',
        'app.permissoes',
        'app.vendas',
        'app.clientes',
        'app.venda_produtos',
        'app.produtos',
        'app.fornecedores'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CompraProdutos') ? [] : ['className' => 'App\Model\Table\CompraProdutosTable'];
        $this->CompraProdutos = TableRegistry::get('CompraProdutos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CompraProdutos);

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
