<?php

namespace App\sts\Models;

if(!defined('R4F5CC')){
    header("Location: /");
    die("Erro: Página não encontrada");
}

use PDO;
/**
 * Description of Conn
 *
 * @author walla
 */
class Conn 
{
    private string $db = "mysql";
    private string $host = "localhost";
    private string $user = "root";
    private string $pass = "";
    private string $dbname = "buriti";
    private int $port = 3306;
    private object $connect;
    
    protected function connect() {
        try {
//            $this->connect = new PDO($this->db . ':host=' . $this->host . ';dbname=' . $this->
//            dbname, $this->user, $this->pass);
            
            $this->connect = $this->connect = new PDO($this->db . ':host=' . $this->host . ';port=' . $this->port . 
                    ';dbname=' . $this->dbname, $this->user, $this->pass);
            return $this->connect;
        } catch (Exception $ex) {
            die('Erro: Por favor tente novamente. Caso o problema persista, entre em'
                    . 'contato com o administrador wallace@studioburiti.com.br');
        }
        
    }
}
