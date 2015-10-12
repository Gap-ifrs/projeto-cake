<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Compras Controller
 *
 * @property \App\Model\Table\ComprasTable $Compras
 */
class ComprasController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Usuarios', 'Fornecedores']
        ];
        $this->set('compras', $this->paginate($this->Compras));
        $this->set('_serialize', ['compras']);
    }

    /**
     * View method
     *
     * @param string|null $id Compra id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $compra = $this->Compras->get($id, [
            'contain' => ['Usuarios', 'Fornecedores', 'CompraProdutos']
        ]);
        $this->set('compra', $compra);
        $this->set('_serialize', ['compra']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $compra = $this->Compras->newEntity();
        if ($this->request->is('post')) {
            $compra = $this->Compras->patchEntity($compra, $this->request->data);
            if ($this->Compras->save($compra)) {
                $this->Flash->success(__('The compra has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The compra could not be saved. Please, try again.'));
            }
        }
        $usuarios = $this->Compras->Usuarios->find('list', ['limit' => 200]);
        $fornecedores = $this->Compras->Fornecedores->find('list', ['limit' => 200]);
        $this->set(compact('compra', 'usuarios', 'fornecedores'));
        $this->set('_serialize', ['compra']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Compra id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $compra = $this->Compras->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $compra = $this->Compras->patchEntity($compra, $this->request->data);
            if ($this->Compras->save($compra)) {
                $this->Flash->success(__('The compra has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The compra could not be saved. Please, try again.'));
            }
        }
        $usuarios = $this->Compras->Usuarios->find('list', ['limit' => 200]);
        $fornecedores = $this->Compras->Fornecedores->find('list', ['limit' => 200]);
        $this->set(compact('compra', 'usuarios', 'fornecedores'));
        $this->set('_serialize', ['compra']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Compra id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $compra = $this->Compras->get($id);
        if ($this->Compras->delete($compra)) {
            $this->Flash->success(__('The compra has been deleted.'));
        } else {
            $this->Flash->error(__('The compra could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
