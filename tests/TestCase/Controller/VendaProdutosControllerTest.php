<?php
namespace App\Test\TestCase\Controller;

use App\Controller\VendaProdutosController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\VendaProdutosController Test Case
 */
class VendaProdutosControllerTest extends IntegrationTestCase
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
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
