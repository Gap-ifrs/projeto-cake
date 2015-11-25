<?php

namespace App\Controller;

use App\Controller\AppController;
use App\Controller\IRelatorio;

/**
 * Relatorios Controller
 *
 * @property \App\Model\Table\RelatoriosTable $Relatorios
 */
class RelatoriosController extends AppController {

    public function index() {

        if ($this->request->is('post')) {

            $this->redirect(['action' => 'relatorioGerado', $_POST['Relatorio']]);
        }
    }

    public function relatorioGerado($relatorioOpt) {

        $relatorioGerado = $this->gerarRelatorio($this->verificaRelatorioSelecionado($relatorioOpt));

        $this->set(compact('relatorioGerado', $relatorioGerado));
        $this->set('_serialize', ['relatorioGerado']);
    }

    public function gerarRelatorio(IRelatorio $relatorio) {
        return $relatorio->gerar();
    }

    private function verificaRelatorioSelecionado($relatorioOpt) {

        switch ($relatorioOpt) {
            case 'cliente':
                return new RelatorioCliente();
            case 'fornecedor':
                return new RelatorioFornecedor();
        }
    }

    //    public function gerarRelatorio2($id = null) {
//        $relatorio = $this->Relatorios->get(
//                $id, ['contain' => ['Usuarios', 'Clientes', 'RelatorioProdutos']
//        ]);
//        $this->set('relatorio', $relatorio);
//        $this->set('_serialize', ['relatorio']);
//    }
//    public function gerarRelatorio($id, $relatorio) {
//        
//        
//        exit($id.' - '.$relatorio );
//    }
//    
//     public function gerarRelatorio($id, $teste) {
//         
//         exit($id. ' - '.$teste);
//         
//        $venda = $this->Vendas->get($id, [
//            'contain' => ['Usuarios', 'Clientes', 'VendaProdutos']
//        ]);
//        $this->set('venda', $venda);
//        $this->set('_serialize', ['venda']);
//        
//        echo $id;
//    }
}
