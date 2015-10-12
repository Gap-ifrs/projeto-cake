<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $permissao->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $permissao->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Permissoes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="permissoes form large-9 medium-8 columns content">
    <?= $this->Form->create($permissao) ?>
    <fieldset>
        <legend><?= __('Edit Permissao') ?></legend>
        <?php
            echo $this->Form->input('nome');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
