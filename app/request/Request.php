<?php

namespace App\request;

class Request
{

    private  $uri;
    private  $method;


    public function __construct()
    {
        $this->uri = self::setUri(self::getUri());
        $this->method = self::setMethod(self::getMethod());
    }

    public function getUri()
    {
        $uri = $_SERVER['REQUEST_URI'];
        return $uri;
    }

    public static function getPost(String $name){
        $post = filter_input(INPUT_POST,$name);
        return $post;
    }

    public function getMethod(){
        $method = $_SERVER['REQUEST_METHOD'];
        return $method;
    }

    private function setUri(String $uri){
         $this->uri = $uri;
    }

    private function setMethod($method){
         $this->method = $method;
    }

    
}
