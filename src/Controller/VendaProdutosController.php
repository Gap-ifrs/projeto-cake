<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * VendaProdutos Controller
 *
 * @property \App\Model\Table\VendaProdutosTable $VendaProdutos
 */
class VendaProdutosController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Vendas', 'Produtos']
        ];
        $this->set('vendaProdutos', $this->paginate($this->VendaProdutos));
        $this->set('_serialize', ['vendaProdutos']);
    }

    /**
     * View method
     *
     * @param string|null $id Venda Produto id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vendaProduto = $this->VendaProdutos->get($id, [
            'contain' => ['Vendas', 'Produtos']
        ]);
        $this->set('vendaProduto', $vendaProduto);
        $this->set('_serialize', ['vendaProduto']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vendaProduto = $this->VendaProdutos->newEntity();
        if ($this->request->is('post')) {
            $vendaProduto = $this->VendaProdutos->patchEntity($vendaProduto, $this->request->data);
            if ($this->VendaProdutos->save($vendaProduto)) {
                $this->Flash->success(__('The venda produto has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The venda produto could not be saved. Please, try again.'));
            }
        }
        $vendas = $this->VendaProdutos->Vendas->find('list', ['limit' => 200]);
        $produtos = $this->VendaProdutos->Produtos->find('list', ['limit' => 200]);
        $this->set(compact('vendaProduto', 'vendas', 'produtos'));
        $this->set('_serialize', ['vendaProduto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Venda Produto id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vendaProduto = $this->VendaProdutos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vendaProduto = $this->VendaProdutos->patchEntity($vendaProduto, $this->request->data);
            if ($this->VendaProdutos->save($vendaProduto)) {
                $this->Flash->success(__('The venda produto has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The venda produto could not be saved. Please, try again.'));
            }
        }
        $vendas = $this->VendaProdutos->Vendas->find('list', ['limit' => 200]);
        $produtos = $this->VendaProdutos->Produtos->find('list', ['limit' => 200]);
        $this->set(compact('vendaProduto', 'vendas', 'produtos'));
        $this->set('_serialize', ['vendaProduto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Venda Produto id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vendaProduto = $this->VendaProdutos->get($id);
        if ($this->VendaProdutos->delete($vendaProduto)) {
            $this->Flash->success(__('The venda produto has been deleted.'));
        } else {
            $this->Flash->error(__('The venda produto could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
