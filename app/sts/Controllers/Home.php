<?php

namespace App\sts\Controllers;

if (!defined('R4F5CC')) {
    header("Location: /");
    die("Erro: Página não encontrada");
}

/**
 * Description of Home
 *
 * @author walla
 */
class Home
{
    private $dados;

    public function index()
    {
        $viewHome = new \App\sts\Models\StsHome();
        $this->dados = $viewHome->index();

        $carregarView = new \Core\ConfigView("sts/Views/home", $this->dados);
        $carregarView->renderizar();
    }
}
