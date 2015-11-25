<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Vendas Controller
 *
 * @property \App\Model\Table\VendasTable $Vendas
 */
class VendasController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Usuarios', 'Clientes']
        ];
        $this->set('vendas', $this->paginate($this->Vendas));
        $this->set('_serialize', ['vendas']);
    }

    /**
     * View method
     *
     * @param string|null $id Venda id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $venda = $this->Vendas->get($id, [
            'contain' => ['Usuarios', 'Clientes', 'VendaProdutos']
        ]);
        $this->set('venda', $venda);
        $this->set('_serialize', ['venda']);
    }
    
    
    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $venda = $this->Vendas->newEntity();
        if ($this->request->is('post')) {
            $venda = $this->Vendas->patchEntity($venda, $this->request->data);
            if ($this->Vendas->save($venda)) {
                $this->Flash->success(__('The venda has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The venda could not be saved. Please, try again.'));
            }
        }
        $usuarios = $this->Vendas->Usuarios->find('list', ['limit' => 200]);
        $clientes = $this->Vendas->Clientes->find('list', ['limit' => 200]);
        $this->set(compact('venda', 'usuarios', 'clientes'));
        $this->set('_serialize', ['venda']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Venda id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $venda = $this->Vendas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $venda = $this->Vendas->patchEntity($venda, $this->request->data);
            if ($this->Vendas->save($venda)) {
                $this->Flash->success(__('The venda has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The venda could not be saved. Please, try again.'));
            }
        }
        $usuarios = $this->Vendas->Usuarios->find('list', ['limit' => 200]);
        $clientes = $this->Vendas->Clientes->find('list', ['limit' => 200]);
        $this->set(compact('venda', 'usuarios', 'clientes'));
        $this->set('_serialize', ['venda']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Venda id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $venda = $this->Vendas->get($id);
        if ($this->Vendas->delete($venda)) {
            $this->Flash->success(__('The venda has been deleted.'));
        } else {
            $this->Flash->error(__('The venda could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
