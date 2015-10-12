<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Usuario Permissao'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Permissoes'), ['controller' => 'Permissoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Permissao'), ['controller' => 'Permissoes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usuarioPermissoes index large-9 medium-8 columns content">
    <h3><?= __('Usuario Permissoes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('usuario_id') ?></th>
                <th><?= $this->Paginator->sort('permissao_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarioPermissoes as $usuarioPermissao): ?>
            <tr>
                <td><?= $usuarioPermissao->has('usuario') ? $this->Html->link($usuarioPermissao->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $usuarioPermissao->usuario->id]) : '' ?></td>
                <td><?= $usuarioPermissao->has('permissao') ? $this->Html->link($usuarioPermissao->permissao->id, ['controller' => 'Permissoes', 'action' => 'view', $usuarioPermissao->permissao->id]) : '' ?></td>
                <td><?= h($usuarioPermissao->created) ?></td>
                <td><?= h($usuarioPermissao->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $usuarioPermissao->usuario_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usuarioPermissao->usuario_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usuarioPermissao->usuario_id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuarioPermissao->usuario_id)]) ?>
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
