<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $usuarioPermissao->usuario_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $usuarioPermissao->usuario_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Usuario Permissoes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Permissoes'), ['controller' => 'Permissoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Permissao'), ['controller' => 'Permissoes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usuarioPermissoes form large-9 medium-8 columns content">
    <?= $this->Form->create($usuarioPermissao) ?>
    <fieldset>
        <legend><?= __('Edit Usuario Permissao') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
