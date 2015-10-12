<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Usuario Permissao'), ['action' => 'edit', $usuarioPermissao->usuario_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Usuario Permissao'), ['action' => 'delete', $usuarioPermissao->usuario_id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuarioPermissao->usuario_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Usuario Permissoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario Permissao'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Permissoes'), ['controller' => 'Permissoes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Permissao'), ['controller' => 'Permissoes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usuarioPermissoes view large-9 medium-8 columns content">
    <h3><?= h($usuarioPermissao->usuario_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Usuario') ?></th>
            <td><?= $usuarioPermissao->has('usuario') ? $this->Html->link($usuarioPermissao->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $usuarioPermissao->usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Permissao') ?></th>
            <td><?= $usuarioPermissao->has('permissao') ? $this->Html->link($usuarioPermissao->permissao->id, ['controller' => 'Permissoes', 'action' => 'view', $usuarioPermissao->permissao->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($usuarioPermissao->created) ?></tr>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($usuarioPermissao->modified) ?></tr>
        </tr>
    </table>
</div>
