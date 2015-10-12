<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsuarioPermissoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsuarioPermissoesTable Test Case
 */
class UsuarioPermissoesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.usuario_permissoes',
        'app.usuarios',
        'app.compras',
        'app.fornecedores',
        'app.compra_produtos',
        'app.produtos',
        'app.vendas',
        'app.clientes',
        'app.venda_produtos',
        'app.permissoes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('UsuarioPermissoes') ? [] : ['className' => 'App\Model\Table\UsuarioPermissoesTable'];
        $this->UsuarioPermissoes = TableRegistry::get('UsuarioPermissoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UsuarioPermissoes);

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
