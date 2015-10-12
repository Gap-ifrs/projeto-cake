<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Usuario'), ['action' => 'edit', $usuario->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Usuario'), ['action' => 'delete', $usuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Compras'), ['controller' => 'Compras', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Compra'), ['controller' => 'Compras', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuario Permissoes'), ['controller' => 'UsuarioPermissoes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario Permissao'), ['controller' => 'UsuarioPermissoes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vendas'), ['controller' => 'Vendas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Venda'), ['controller' => 'Vendas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usuarios view large-9 medium-8 columns content">
    <h3><?= h($usuario->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($usuario->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($usuario->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Password') ?></th>
            <td><?= h($usuario->password) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($usuario->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Telefone') ?></th>
            <td><?= $this->Number->format($usuario->telefone) ?></td>
        </tr>
        <tr>
            <th><?= __('Celular') ?></th>
            <td><?= $this->Number->format($usuario->celular) ?></td>
        </tr>
        <tr>
            <th><?= __('Cpf') ?></th>
            <td><?= $this->Number->format($usuario->cpf) ?></td>
        </tr>
        <tr>
            <th><?= __('Data Nascimento') ?></th>
            <td><?= h($usuario->data_nascimento) ?></tr>
        </tr>
        <tr>
            <th><?= __('Data Admissao') ?></th>
            <td><?= h($usuario->data_admissao) ?></tr>
        </tr>
        <tr>
            <th><?= __('Data Demissao') ?></th>
            <td><?= h($usuario->data_demissao) ?></tr>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($usuario->created) ?></tr>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($usuario->modified) ?></tr>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $usuario->status ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Compras') ?></h4>
        <?php if (!empty($usuario->compras)): ?>
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
            <?php foreach ($usuario->compras as $compras): ?>
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
    <div class="related">
        <h4><?= __('Related Usuario Permissoes') ?></h4>
        <?php if (!empty($usuario->usuario_permissoes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Usuario Id') ?></th>
                <th><?= __('Permissao Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($usuario->usuario_permissoes as $usuarioPermissoes): ?>
            <tr>
                <td><?= h($usuarioPermissoes->usuario_id) ?></td>
                <td><?= h($usuarioPermissoes->permissao_id) ?></td>
                <td><?= h($usuarioPermissoes->created) ?></td>
                <td><?= h($usuarioPermissoes->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'UsuarioPermissoes', 'action' => 'view', $usuarioPermissoes->usuario_id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'UsuarioPermissoes', 'action' => 'edit', $usuarioPermissoes->usuario_id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UsuarioPermissoes', 'action' => 'delete', $usuarioPermissoes->usuario_id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuarioPermissoes->usuario_id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Vendas') ?></h4>
        <?php if (!empty($usuario->vendas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Valor Total') ?></th>
                <th><?= __('Data') ?></th>
                <th><?= __('Usuario Id') ?></th>
                <th><?= __('Cliente Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($usuario->vendas as $vendas): ?>
            <tr>
                <td><?= h($vendas->id) ?></td>
                <td><?= h($vendas->valor_total) ?></td>
                <td><?= h($vendas->data) ?></td>
                <td><?= h($vendas->usuario_id) ?></td>
                <td><?= h($vendas->cliente_id) ?></td>
                <td><?= h($vendas->created) ?></td>
                <td><?= h($vendas->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Vendas', 'action' => 'view', $vendas->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Vendas', 'action' => 'edit', $vendas->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Vendas', 'action' => 'delete', $vendas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vendas->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
