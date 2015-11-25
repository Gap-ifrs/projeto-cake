<?php 


use Cake\Core\Configure;

use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')):
    throw new NotFoundException();
endif;

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
    <head>
    <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?= $cakeDescription ?>
        </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('bootstrap-theme.css') ?>
    <?= $this->Html->css('dashboard.css') ?>
    
    
    <?= $this->Html->script('jquery.js') ?>
    <?= $this->Html->script('bootstrap.js') ?>
         
        
    </head>
    <body>
        
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">GAP</a>
              </div>
              <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">

                  <li><a href="#">Help</a></li>
                </ul>
                <form class="navbar-form navbar-right">
                  <input type="text" class="form-control" placeholder="Search...">
                </form>
              </div>
            </div>
          </nav>
        
        
        <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            
          <ul class="nav nav-sidebar">
             
              <li><?= $this->Html->link(__('Relatorios'), ['controller' => 'Relatorios','action' => 'index' ]  ) ?></li>
              
              
          </ul>
            
       
          
          <ul class="nav nav-sidebar">
              <li><?= $this->Html->link(__('Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
              <li><?= $this->Html->link(__('Cadastrar Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
              
              
<!--            <li><?= $this->Html->link(__('List Vendas'), ['controller' => 'Vendas', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('List Vendas Produtos'), ['controller' => 'VendaProdutos', 'action' => 'index']) ?></li>-->
           
          </ul>
            
             <ul class="nav nav-sidebar">
              <li><?= $this->Html->link(__('Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?></li>
              <li><?= $this->Html->link(__('Cadastrar Produto'), ['controller' => 'Produtos', 'action' => 'add']) ?></li>
              

          </ul>
            
            
            <ul class="nav nav-sidebar">
            <!--<li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>-->
              
            <li><?= $this->Html->link(__('Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('Cadastrar Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
            
            
<!--            <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('List Compras'), ['controller' => 'Compras', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('List Compra Produtos'), ['controller' => 'CompraProdutos', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('List Fornecedores'), ['controller' => 'Fornecedores', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('List Permissoes'), ['controller' => 'Permissoes', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('List Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('List Usuarios Permissoes'), ['controller' => 'UsuarioPermissoes', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('List Vendas'), ['controller' => 'Vendas', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('List Vendas Produtos'), ['controller' => 'VendaProdutos', 'action' => 'index']) ?></li>-->
          </ul>
            
            <ul class="nav nav-sidebar">
              <li><?= $this->Html->link(__('Fornecedores'), ['controller' => 'Fornecedores', 'action' => 'index']) ?></li>
              <li><?= $this->Html->link(__('Cadastrar Fornecedor'), ['controller' => 'Fornecedores', 'action' => 'add']) ?></li>
              

          </ul>
            
            <ul class="nav nav-sidebar">
              <li><?= $this->Html->link(__('Vendas'), ['controller' => 'Vendas', 'action' => 'index']) ?></li>
              <li><?= $this->Html->link(__('Vender'), ['controller' => 'Vendas', 'action' => 'add']) ?></li>
              

          </ul>
            
            <ul class="nav nav-sidebar">
              <li><?= $this->Html->link(__('Compras'), ['controller' => 'Compras', 'action' => 'index']) ?></li>
              <li><?= $this->Html->link(__('Comprar'), ['controller' => 'Compras', 'action' => 'add']) ?></li>
              

          </ul>
         
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
         
        </div>
      </div>
    </div>

        
        
        
     
        <footer>
        </footer>
    </body>
</html>
