<?php

namespace App\controller;


class Home{


    public static function index(){
       

        return   [
            "dados" => [
                "title" => "Home",
                 "page" => "home/home",
                 "testando" => "teste feito"
            ]
        ];
   
    }
}