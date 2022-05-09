<?php

namespace App\model;

use App\database\database;
use App\util\Util;
use App\database\DB;

class UserModel extends Util
{

    private string $nome;
    private string $cpf;
    private string $cep;
    private string $email;
    private string $bairro;
    private string $cidade;
    private string $rua;
    private string $estado;

    public function __construct()
    {
        // $this->nome = self::getPostFrm("nome");
        // $this->cep = self::getPostFrm('cep');
        // $this->email = self::getPostFrmEmail('email');
        // $this->cpf = self::getPostFrm('cpf');
        // $this->bairro = self::getPostFrm('bairro');
        // $this->cidade = self::getPostFrm('cidade');
        // $this->rua = self::getPostFrm('rua');
        // $this->estado = self::getPostFrm('estado');
    }

    public  function getUser()
    {
        $dados = [
            "nome" => $this->nome,
            "senha" => $this->senha
        ];

        return $dados;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getAll()
    {
      
       return self::selectAll('usuario');
    }
}
