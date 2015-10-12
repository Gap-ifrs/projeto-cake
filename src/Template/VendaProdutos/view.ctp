<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Venda Produto'), ['action' => 'edit', $vendaProduto->venda_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Venda Produto'), ['action' => 'delete', $vendaProduto->venda_id], ['confirm' => __('Are you sure you want to delete # {0}?', $vendaProduto->venda_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Venda Produtos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Venda Produto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vendas'), ['controller' => 'Vendas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Venda'), ['controller' => 'Vendas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Produto'), ['controller' => 'Produtos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="vendaProdutos view large-9 medium-8 columns content">
    <h3><?= h($vendaProduto->venda_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Venda') ?></th>
            <td><?= $vendaProduto->has('venda') ? $this->Html->link($vendaProduto->venda->id, ['controller' => 'Vendas', 'action' => 'view', $vendaProduto->venda->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Produto') ?></th>
            <td><?= $vendaProduto->has('produto') ? $this->Html->link($vendaProduto->produto->id, ['controller' => 'Produtos', 'action' => 'view', $vendaProduto->produto->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($vendaProduto->created) ?></tr>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($vendaProduto->modified) ?></tr>
        </tr>
    </table>
</div>
