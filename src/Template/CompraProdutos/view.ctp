<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Compra Produto'), ['action' => 'edit', $compraProduto->compra_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Compra Produto'), ['action' => 'delete', $compraProduto->compra_id], ['confirm' => __('Are you sure you want to delete # {0}?', $compraProduto->compra_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Compra Produtos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Compra Produto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Compras'), ['controller' => 'Compras', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Compra'), ['controller' => 'Compras', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Produto'), ['controller' => 'Produtos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="compraProdutos view large-9 medium-8 columns content">
    <h3><?= h($compraProduto->compra_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Compra') ?></th>
            <td><?= $compraProduto->has('compra') ? $this->Html->link($compraProduto->compra->id, ['controller' => 'Compras', 'action' => 'view', $compraProduto->compra->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Produto') ?></th>
            <td><?= $compraProduto->has('produto') ? $this->Html->link($compraProduto->produto->id, ['controller' => 'Produtos', 'action' => 'view', $compraProduto->produto->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($compraProduto->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($compraProduto->created) ?></tr>
        </tr>
    </table>
</div>
