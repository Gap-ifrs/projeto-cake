<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Compra Produto'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Compras'), ['controller' => 'Compras', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Compra'), ['controller' => 'Compras', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Produto'), ['controller' => 'Produtos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="compraProdutos index large-9 medium-8 columns content">
    <h3><?= __('Compra Produtos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('compra_id') ?></th>
                <th><?= $this->Paginator->sort('produto_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($compraProdutos as $compraProduto): ?>
            <tr>
                <td><?= $compraProduto->has('compra') ? $this->Html->link($compraProduto->compra->id, ['controller' => 'Compras', 'action' => 'view', $compraProduto->compra->id]) : '' ?></td>
                <td><?= $compraProduto->has('produto') ? $this->Html->link($compraProduto->produto->id, ['controller' => 'Produtos', 'action' => 'view', $compraProduto->produto->id]) : '' ?></td>
                <td><?= h($compraProduto->created) ?></td>
                <td><?= h($compraProduto->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $compraProduto->compra_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $compraProduto->compra_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $compraProduto->compra_id], ['confirm' => __('Are you sure you want to delete # {0}?', $compraProduto->compra_id)]) ?>
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
