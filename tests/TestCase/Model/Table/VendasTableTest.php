<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VendasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VendasTable Test Case
 */
class VendasTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.vendas',
        'app.usuarios',
        'app.compras',
        'app.fornecedores',
        'app.compra_produtos',
        'app.produtos',
        'app.usuario_permissoes',
        'app.permissoes',
        'app.clientes',
        'app.venda_produtos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Vendas') ? [] : ['className' => 'App\Model\Table\VendasTable'];
        $this->Vendas = TableRegistry::get('Vendas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Vendas);

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
