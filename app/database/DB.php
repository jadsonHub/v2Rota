<?php

namespace App\database;

use PDO;


abstract class DB
{
    /*Método construtor do banco de dados*/
    public function __construct()
    {
    }

    /*Evita que a classe seja clonada*/
    private function __clone()
    {
    }

    /*Método que destroi a conexão com banco de dados e remove da memória todas as variáveis setadas*/
    public function __destruct()
    {
        $this->disconnect();
        foreach ($this as $key => $value) {
            unset($this->$key);
        }
    }


   
    public function connect()
    {
        return new PDO('mysql:host=localhost;dbname=prog_pw', 'root', '123edu', [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    private function disconnect()
    {
        $this->conexao = null;
    }

   
}
