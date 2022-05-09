<?php

namespace App\controller;

class Error{

    public static function error(){

        return  [
            "dados" => [
                "title" => "Error",
                 "page" => "error/error",
                 "testanto" => "teste feito"
            ]
        ];
    }
}