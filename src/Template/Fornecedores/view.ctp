<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Fornecedor'), ['action' => 'edit', $fornecedor->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fornecedor'), ['action' => 'delete', $fornecedor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fornecedor->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fornecedores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fornecedor'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Compras'), ['controller' => 'Compras', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Compra'), ['controller' => 'Compras', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="fornecedores view large-9 medium-8 columns content">
    <h3><?= h($fornecedor->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($fornecedor->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($fornecedor->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($fornecedor->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Telefone') ?></th>
            <td><?= $this->Number->format($fornecedor->telefone) ?></td>
        </tr>
        <tr>
            <th><?= __('Cnpj') ?></th>
            <td><?= $this->Number->format($fornecedor->cnpj) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($fornecedor->created) ?></tr>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($fornecedor->modified) ?></tr>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Compras') ?></h4>
        <?php if (!empty($fornecedor->compras)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Valor Total') ?></th>
                <th><?= __('Data') ?></th>
                <th><?= __('Usuario Id') ?></th>
                <th><?= __('Fornecedor Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($fornecedor->compras as $compras): ?>
            <tr>
                <td><?= h($compras->id) ?></td>
                <td><?= h($compras->valor_total) ?></td>
                <td><?= h($compras->data) ?></td>
                <td><?= h($compras->usuario_id) ?></td>
                <td><?= h($compras->fornecedor_id) ?></td>
                <td><?= h($compras->created) ?></td>
                <td><?= h($compras->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Compras', 'action' => 'view', $compras->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Compras', 'action' => 'edit', $compras->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Compras', 'action' => 'delete', $compras->id], ['confirm' => __('Are you sure you want to delete # {0}?', $compras->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
