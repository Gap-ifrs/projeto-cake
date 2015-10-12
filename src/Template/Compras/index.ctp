<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Compra'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fornecedores'), ['controller' => 'Fornecedores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fornecedor'), ['controller' => 'Fornecedores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Compra Produtos'), ['controller' => 'CompraProdutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Compra Produto'), ['controller' => 'CompraProdutos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="compras index large-9 medium-8 columns content">
    <h3><?= __('Compras') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('valor_total') ?></th>
                <th><?= $this->Paginator->sort('data') ?></th>
                <th><?= $this->Paginator->sort('usuario_id') ?></th>
                <th><?= $this->Paginator->sort('fornecedor_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($compras as $compra): ?>
            <tr>
                <td><?= $this->Number->format($compra->id) ?></td>
                <td><?= $this->Number->format($compra->valor_total) ?></td>
                <td><?= h($compra->data) ?></td>
                <td><?= $compra->has('usuario') ? $this->Html->link($compra->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $compra->usuario->id]) : '' ?></td>
                <td><?= $compra->has('fornecedor') ? $this->Html->link($compra->fornecedor->id, ['controller' => 'Fornecedores', 'action' => 'view', $compra->fornecedor->id]) : '' ?></td>
                <td><?= h($compra->created) ?></td>
                <td><?= h($compra->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $compra->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $compra->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $compra->id], ['confirm' => __('Are you sure you want to delete # {0}?', $compra->id)]) ?>
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
