<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Permissoes Controller
 *
 * @property \App\Model\Table\PermissoesTable $Permissoes
 */
class PermissoesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('permissoes', $this->paginate($this->Permissoes));
        $this->set('_serialize', ['permissoes']);
    }

    /**
     * View method
     *
     * @param string|null $id Permissao id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $permissao = $this->Permissoes->get($id, [
            'contain' => []
        ]);
        $this->set('permissao', $permissao);
        $this->set('_serialize', ['permissao']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $permissao = $this->Permissoes->newEntity();
        if ($this->request->is('post')) {
            $permissao = $this->Permissoes->patchEntity($permissao, $this->request->data);
            if ($this->Permissoes->save($permissao)) {
                $this->Flash->success(__('The permissao has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The permissao could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('permissao'));
        $this->set('_serialize', ['permissao']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Permissao id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $permissao = $this->Permissoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $permissao = $this->Permissoes->patchEntity($permissao, $this->request->data);
            if ($this->Permissoes->save($permissao)) {
                $this->Flash->success(__('The permissao has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The permissao could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('permissao'));
        $this->set('_serialize', ['permissao']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Permissao id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $permissao = $this->Permissoes->get($id);
        if ($this->Permissoes->delete($permissao)) {
            $this->Flash->success(__('The permissao has been deleted.'));
        } else {
            $this->Flash->error(__('The permissao could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
