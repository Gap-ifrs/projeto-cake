<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UsuarioPermissoes Controller
 *
 * @property \App\Model\Table\UsuarioPermissoesTable $UsuarioPermissoes
 */
class UsuarioPermissoesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Usuarios', 'Permissoes']
        ];
        $this->set('usuarioPermissoes', $this->paginate($this->UsuarioPermissoes));
        $this->set('_serialize', ['usuarioPermissoes']);
    }

    /**
     * View method
     *
     * @param string|null $id Usuario Permissao id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usuarioPermissao = $this->UsuarioPermissoes->get($id, [
            'contain' => ['Usuarios', 'Permissoes']
        ]);
        $this->set('usuarioPermissao', $usuarioPermissao);
        $this->set('_serialize', ['usuarioPermissao']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usuarioPermissao = $this->UsuarioPermissoes->newEntity();
        if ($this->request->is('post')) {
            $usuarioPermissao = $this->UsuarioPermissoes->patchEntity($usuarioPermissao, $this->request->data);
            if ($this->UsuarioPermissoes->save($usuarioPermissao)) {
                $this->Flash->success(__('The usuario permissao has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The usuario permissao could not be saved. Please, try again.'));
            }
        }
        $usuarios = $this->UsuarioPermissoes->Usuarios->find('list', ['limit' => 200]);
        $permissoes = $this->UsuarioPermissoes->Permissoes->find('list', ['limit' => 200]);
        $this->set(compact('usuarioPermissao', 'usuarios', 'permissoes'));
        $this->set('_serialize', ['usuarioPermissao']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Usuario Permissao id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usuarioPermissao = $this->UsuarioPermissoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usuarioPermissao = $this->UsuarioPermissoes->patchEntity($usuarioPermissao, $this->request->data);
            if ($this->UsuarioPermissoes->save($usuarioPermissao)) {
                $this->Flash->success(__('The usuario permissao has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The usuario permissao could not be saved. Please, try again.'));
            }
        }
        $usuarios = $this->UsuarioPermissoes->Usuarios->find('list', ['limit' => 200]);
        $permissoes = $this->UsuarioPermissoes->Permissoes->find('list', ['limit' => 200]);
        $this->set(compact('usuarioPermissao', 'usuarios', 'permissoes'));
        $this->set('_serialize', ['usuarioPermissao']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Usuario Permissao id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usuarioPermissao = $this->UsuarioPermissoes->get($id);
        if ($this->UsuarioPermissoes->delete($usuarioPermissao)) {
            $this->Flash->success(__('The usuario permissao has been deleted.'));
        } else {
            $this->Flash->error(__('The usuario permissao could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
