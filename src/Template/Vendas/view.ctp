<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Venda'), ['action' => 'edit', $venda->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Venda'), ['action' => 'delete', $venda->id], ['confirm' => __('Are you sure you want to delete # {0}?', $venda->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Vendas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Venda'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Venda Produtos'), ['controller' => 'VendaProdutos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Venda Produto'), ['controller' => 'VendaProdutos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="vendas view large-9 medium-8 columns content">
    <h3><?= h($venda->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Usuario') ?></th>
            <td><?= $venda->has('usuario') ? $this->Html->link($venda->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $venda->usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Cliente') ?></th>
            <td><?= $venda->has('cliente') ? $this->Html->link($venda->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $venda->cliente->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($venda->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Valor Total') ?></th>
            <td><?= $this->Number->format($venda->valor_total) ?></td>
        </tr>
        <tr>
            <th><?= __('Data') ?></th>
            <td><?= h($venda->data) ?></tr>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($venda->created) ?></tr>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($venda->modified) ?></tr>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Venda Produtos') ?></h4>
        <?php if (!empty($venda->venda_produtos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Venda Id') ?></th>
                <th><?= __('Produto Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($venda->venda_produtos as $vendaProdutos): ?>
            <tr>
                <td><?= h($vendaProdutos->venda_id) ?></td>
                <td><?= h($vendaProdutos->produto_id) ?></td>
                <td><?= h($vendaProdutos->created) ?></td>
                <td><?= h($vendaProdutos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'VendaProdutos', 'action' => 'view', $vendaProdutos->venda_id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'VendaProdutos', 'action' => 'edit', $vendaProdutos->venda_id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'VendaProdutos', 'action' => 'delete', $vendaProdutos->venda_id], ['confirm' => __('Are you sure you want to delete # {0}?', $vendaProdutos->venda_id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
