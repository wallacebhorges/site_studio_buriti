<?php

namespace App\sts\Controllers;

if(!defined('R4F5CC')){
    header("Location: /");
    die("Erro: Página não encontrada");
}

/**
 * Description of Sobre
 *
 * @author walla
 */
class Sobre {
    private $dados;


    public function index() {
        $viewSobre = new \App\sts\Models\StsHome();
        $this->dados = $viewSobre->index();
        $carregarView = new \Core\ConfigView("sts/Views/sobre", $this->dados);
        $carregarView->renderizar();
    }
}

