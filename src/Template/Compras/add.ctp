<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Compras'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fornecedores'), ['controller' => 'Fornecedores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fornecedor'), ['controller' => 'Fornecedores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Compra Produtos'), ['controller' => 'CompraProdutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Compra Produto'), ['controller' => 'CompraProdutos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="compras form large-9 medium-8 columns content">
    <?= $this->Form->create($compra) ?>
    <fieldset>
        <legend><?= __('Add Compra') ?></legend>
        <?php
            echo $this->Form->input('valor_total');
            echo $this->Form->input('data');
            echo $this->Form->input('usuario_id', ['options' => $usuarios]);
            echo $this->Form->input('fornecedor_id', ['options' => $fornecedores]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
