<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Venda Produto'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vendas'), ['controller' => 'Vendas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Venda'), ['controller' => 'Vendas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Produto'), ['controller' => 'Produtos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vendaProdutos index large-9 medium-8 columns content">
    <h3><?= __('Venda Produtos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('venda_id') ?></th>
                <th><?= $this->Paginator->sort('produto_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vendaProdutos as $vendaProduto): ?>
            <tr>
                <td><?= $vendaProduto->has('venda') ? $this->Html->link($vendaProduto->venda->id, ['controller' => 'Vendas', 'action' => 'view', $vendaProduto->venda->id]) : '' ?></td>
                <td><?= $vendaProduto->has('produto') ? $this->Html->link($vendaProduto->produto->id, ['controller' => 'Produtos', 'action' => 'view', $vendaProduto->produto->id]) : '' ?></td>
                <td><?= h($vendaProduto->created) ?></td>
                <td><?= h($vendaProduto->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $vendaProduto->venda_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $vendaProduto->venda_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vendaProduto->venda_id], ['confirm' => __('Are you sure you want to delete # {0}?', $vendaProduto->venda_id)]) ?>
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
