<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CompraProdutos Controller
 *
 * @property \App\Model\Table\CompraProdutosTable $CompraProdutos
 */
class CompraProdutosController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Compras', 'Produtos']
        ];
        $this->set('compraProdutos', $this->paginate($this->CompraProdutos));
        $this->set('_serialize', ['compraProdutos']);
    }

    /**
     * View method
     *
     * @param string|null $id Compra Produto id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $compraProduto = $this->CompraProdutos->get($id, [
            'contain' => ['Compras', 'Produtos']
        ]);
        $this->set('compraProduto', $compraProduto);
        $this->set('_serialize', ['compraProduto']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $compraProduto = $this->CompraProdutos->newEntity();
        if ($this->request->is('post')) {
            $compraProduto = $this->CompraProdutos->patchEntity($compraProduto, $this->request->data);
            if ($this->CompraProdutos->save($compraProduto)) {
                $this->Flash->success(__('The compra produto has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The compra produto could not be saved. Please, try again.'));
            }
        }
        $compras = $this->CompraProdutos->Compras->find('list', ['limit' => 200]);
        $produtos = $this->CompraProdutos->Produtos->find('list', ['limit' => 200]);
        $this->set(compact('compraProduto', 'compras', 'produtos'));
        $this->set('_serialize', ['compraProduto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Compra Produto id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $compraProduto = $this->CompraProdutos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $compraProduto = $this->CompraProdutos->patchEntity($compraProduto, $this->request->data);
            if ($this->CompraProdutos->save($compraProduto)) {
                $this->Flash->success(__('The compra produto has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The compra produto could not be saved. Please, try again.'));
            }
        }
        $compras = $this->CompraProdutos->Compras->find('list', ['limit' => 200]);
        $produtos = $this->CompraProdutos->Produtos->find('list', ['limit' => 200]);
        $this->set(compact('compraProduto', 'compras', 'produtos'));
        $this->set('_serialize', ['compraProduto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Compra Produto id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $compraProduto = $this->CompraProdutos->get($id);
        if ($this->CompraProdutos->delete($compraProduto)) {
            $this->Flash->success(__('The compra produto has been deleted.'));
        } else {
            $this->Flash->error(__('The compra produto could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
