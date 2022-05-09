<?php

namespace App\controller;

use App\model\UserModel;



class User{


    public static function postLogin(){


       $userModel = new UserModel();
   
       var_dump($userModel->getAll());
       die();
    }


    public static function postCriar(){
   
       $userModel = new UserModel();

     }

    public static function index(){
           return   [
            "dados" => [
                "title" => "Pagina inicial do Usuario",
                 "page" => "user/index",
                 "testanto" => "teste feito"
            ]
        ];
    }

    public static function fmrCriar(){
        return   [
            "dados" => [
                "title" => "Pagina de criar conta",
                 "page" => "user/criar",
                 "testanto" => "teste feito"
            ]
        ];
    }

    public static function fmrLogin(){
        return   [
            "dados" => [
                "title" => "Pagina inicial do Usuario",
                 "page" => "user/criar",
                 "testanto" => "teste feito"
            ]
        ];
    }

    public static function listaUser(){
        return   [
            "dados" => [
                "title" => "Lista de usuário",
                 "page" => "user/lista",
                 "testanto" => "teste feito"
            ]
        ];
    }
}