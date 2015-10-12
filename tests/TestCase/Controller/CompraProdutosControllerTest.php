<?php
namespace App\Test\TestCase\Controller;

use App\Controller\CompraProdutosController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\CompraProdutosController Test Case
 */
class CompraProdutosControllerTest extends IntegrationTestCase
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
