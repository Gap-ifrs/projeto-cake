
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          
          <ul class="nav nav-sidebar">
              <li class="active"><?= $this->Html->link(__('Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
              <li><?= $this->Html->link(__('Cadastrar Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
              
          </ul>
            
             <ul class="nav nav-sidebar">
              <li><?= $this->Html->link(__('Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?></li>
              <li><?= $this->Html->link(__('Cadastrar Produto'), ['controller' => 'Produtos', 'action' => 'add']) ?></li>
              

          </ul>
            
            
            <ul class="nav nav-sidebar">
              
            <li><?= $this->Html->link(__('Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('Cadastrar Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
            
   
          </ul>
            
            <ul class="nav nav-sidebar">
              <li><?= $this->Html->link(__('Fornecedores'), ['controller' => 'Fornecedores', 'action' => 'index']) ?></li>
              <li><?= $this->Html->link(__('Cadastrar Fornecedor'), ['controller' => 'Fornecedores', 'action' => 'add']) ?></li>
      
          </ul>
            
            <ul class="nav nav-sidebar">
              <li><?= $this->Html->link(__('Vendas'), ['controller' => 'Vendas', 'action' => 'index']) ?></li>
              <li><?= $this->Html->link(__('Vender'), ['controller' => 'Vendas', 'action' => 'add']) ?></li>
              

          </ul>
            
            <ul class="nav nav-sidebar">
              <li><?= $this->Html->link(__('Compras'), ['controller' => 'Compras', 'action' => 'index']) ?></li>
              <li><?= $this->Html->link(__('Comprar'), ['controller' => 'Compras', 'action' => 'add']) ?></li>
              

          </ul>
         
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header"><?= __('Usuarios') ?></h1>
             
          <div class="table-responsive">
            <table class="table table-striped">
             
                
                <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('password') ?></th>
                    <th><?= $this->Paginator->sort('telefone') ?></th>
                    <th><?= $this->Paginator->sort('celular') ?></th>
                    <th><?= $this->Paginator->sort('cpf') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
              </thead>

              <tbody>
                <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?= $this->Number->format($usuario->id) ?></td>
                <td><?= h($usuario->nome) ?></td>
                <td><?= h($usuario->email) ?></td>
                <td><?= h($usuario->password) ?></td>
                <td><?= $this->Number->format($usuario->telefone) ?></td>
                <td><?= $this->Number->format($usuario->celular) ?></td>
                <td><?= $this->Number->format($usuario->cpf) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $usuario->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usuario->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
               
               
               
               
               
               
              </tbody>
            </table>
              
              <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
          </div>
        </div>
      </div>
  





