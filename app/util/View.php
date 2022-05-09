<?php

namespace App\util;



class View
{
    

   
    public  static function  loadView($arquivo)
    { 
  
       return  __DIR__ . '/../view/' . $arquivo . '.php';
       
    }
   
}
