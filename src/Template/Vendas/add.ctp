
<div class="row">
    <div class="col-sm-3 col-md-2 sidebar">

        <ul class="nav nav-sidebar">
            <li><?= $this->Html->link(__('Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('Cadastrar Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
        </ul>

        <ul class="nav nav-sidebar">
            <li><?= $this->Html->link(__('Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('Cadastrar Produto'), ['controller' => 'Produtos', 'action' => 'add']) ?></li>


        </ul>


        <ul class="nav nav-sidebar">

            <li><?= $this->Html->link(__('Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('Cadastrar Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>


        </ul>

        <ul class="nav nav-sidebar">
            <li><?= $this->Html->link(__('Fornecedores'), ['controller' => 'Fornecedores', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('Cadastrar Fornecedor'), ['controller' => 'Fornecedores', 'action' => 'add']) ?></li>

        </ul>

        <ul class="nav nav-sidebar">
            <li><?= $this->Html->link(__('Vendas'), ['controller' => 'Vendas', 'action' => 'index']) ?></li>
            <li class="active"><?= $this->Html->link(__('Vender'), ['controller' => 'Vendas', 'action' => 'add']) ?></li>
        </ul>

        <ul class="nav nav-sidebar">
            <li><?= $this->Html->link(__('Compras'), ['controller' => 'Compras', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('Comprar'), ['controller' => 'Compras', 'action' => 'add']) ?></li>
        </ul>

    </div>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <h1 class="page-header"><?= __('Vender') ?></h1>

        <div class="vendas form large-9 medium-8 columns content">
            <?= $this->Form->create($venda) ?>
            <fieldset>
              
                <?php
                    echo $this->Form->input('valor_total');
                    echo $this->Form->input('data');
                    echo $this->Form->input('usuario_id', ['options' => $usuarios]);
                    echo $this->Form->input('cliente_id', ['options' => $clientes]);
                    
                ?>
                      
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
