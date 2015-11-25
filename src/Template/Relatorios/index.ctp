
<div class="row">
    <div class="col-sm-3 col-md-2 sidebar">

        <ul class="nav nav-sidebar">

            <li class="active"><?= $this->Html->link(__('Relatorios'), ['controller' => 'Relatorios', 'action' => 'index']) ?></li>


        </ul>

        <ul class="nav nav-sidebar">
            <li><?= $this->Html->link(__('Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
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

        <ul class="nav nav-sidebar">
            <li>


                <?= $this->Form->create('relatorio') ?>
                <fieldset>

                    <?php
                        $usuarios = array(
                            'cliente' => 'por cliente',
                            'fornecedor' => 'por fornecedor'
                        );
                        echo $this->Form->input('Relatorio', ['options' => $usuarios]);
                    ?>

                </fieldset>
                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>
      

        </ul>

    </div>

    <!--    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header"><?= __('Usuarios') ?></h1>
    
            <div class="table-responsive">
                <table class="table table-striped">
    
    
                    <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('id') ?></th>
                            <th><?= $this->Paginator->sort('valor_total') ?></th>
                            <th><?= $this->Paginator->sort('data') ?></th>
                            <th><?= $this->Paginator->sort('usuario_id') ?></th>
                            <th><?= $this->Paginator->sort('cliente_id') ?></th>
                            <th><?= $this->Paginator->sort('created') ?></th>
                            <th><?= $this->Paginator->sort('modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                            <th>teste</th>
                        </tr>
                    </thead>
    
                    <tbody>
    <?php foreach ($vendas as $venda): ?>
                                    <tr>
                                        <td><?= $this->Number->format($venda->id) ?></td>
                                        <td><?= $this->Number->format($venda->valor_total) ?></td>
                                        <td><?= h($venda->data) ?></td>
                                        <td><?= $venda->has('usuario') ? $this->Html->link($venda->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $venda->usuario->id]) : '' ?></td>
                                        <td><?= $venda->has('cliente') ? $this->Html->link($venda->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $venda->cliente->id]) : '' ?></td>
                                        <td><?= h($venda->created) ?></td>
                                        <td><?= h($venda->modified) ?></td>
                                        <td class="actions">
        <?= $this->Html->link(__('View'), ['action' => 'view', $venda->id]) ?>
        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $venda->id]) ?>
        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $venda->id], ['confirm' => __('Are you sure you want to delete # {0}?', $venda->id)]) ?>
                                        </td>
            
                                        <td>
        <?= $this->Html->link(__('ver relatorio'), ['controller' => 'Relatorios', 'action' => 'gerarRelatorio', $venda->id, new RelatorioCliente()]) ?>
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
        </div>-->
</div>

