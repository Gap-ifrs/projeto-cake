<?php
namespace App\Test\TestCase\Controller;

use App\Controller\FornecedoresController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\FornecedoresController Test Case
 */
class FornecedoresControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.fornecedores',
        'app.compras',
        'app.usuarios',
        'app.usuario_permissoes',
        'app.permissoes',
        'app.vendas',
        'app.clientes',
        'app.venda_produtos',
        'app.produtos',
        'app.compra_produtos'
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
