<?php

namespace App\sts\Controllers;

if(!defined('R4F5CC')){
    header("Location: /");
    die("Erro: Página não encontrada");
}
/**
 * Description of Erro
 *
 * @author walla
 */
class Erro {
    public function index() {
        echo "Página Erro<br>";        
    }
}
