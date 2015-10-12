<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Compra'), ['action' => 'edit', $compra->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Compra'), ['action' => 'delete', $compra->id], ['confirm' => __('Are you sure you want to delete # {0}?', $compra->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Compras'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Compra'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fornecedores'), ['controller' => 'Fornecedores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fornecedor'), ['controller' => 'Fornecedores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Compra Produtos'), ['controller' => 'CompraProdutos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Compra Produto'), ['controller' => 'CompraProdutos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="compras view large-9 medium-8 columns content">
    <h3><?= h($compra->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Usuario') ?></th>
            <td><?= $compra->has('usuario') ? $this->Html->link($compra->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $compra->usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Fornecedor') ?></th>
            <td><?= $compra->has('fornecedor') ? $this->Html->link($compra->fornecedor->id, ['controller' => 'Fornecedores', 'action' => 'view', $compra->fornecedor->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($compra->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Valor Total') ?></th>
            <td><?= $this->Number->format($compra->valor_total) ?></td>
        </tr>
        <tr>
            <th><?= __('Data') ?></th>
            <td><?= h($compra->data) ?></tr>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($compra->created) ?></tr>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($compra->modified) ?></tr>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Compra Produtos') ?></h4>
        <?php if (!empty($compra->compra_produtos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Compra Id') ?></th>
                <th><?= __('Produto Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($compra->compra_produtos as $compraProdutos): ?>
            <tr>
                <td><?= h($compraProdutos->compra_id) ?></td>
                <td><?= h($compraProdutos->produto_id) ?></td>
                <td><?= h($compraProdutos->created) ?></td>
                <td><?= h($compraProdutos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CompraProdutos', 'action' => 'view', $compraProdutos->compra_id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'CompraProdutos', 'action' => 'edit', $compraProdutos->compra_id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CompraProdutos', 'action' => 'delete', $compraProdutos->compra_id], ['confirm' => __('Are you sure you want to delete # {0}?', $compraProdutos->compra_id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
