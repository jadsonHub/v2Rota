<?php

namespace App\util;

use App\database\DB;

abstract class Util extends DB{

    public static function getPostFrm($campo){
        return filter_input(INPUT_POST,$campo);
    }

    public static function getPostFrmEmail($email){
        return filter_input(INPUT_POST,$email);
    }

    public function selectAll($tabela)
    {
       // var_dump('oi');die();
        $con = self::connect();
        $sql = $con->prepare("select * from usuario");
        $sql->execute();
       return $sql->fetchAll(); 
        
    }
  
}