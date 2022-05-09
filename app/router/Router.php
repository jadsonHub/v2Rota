<?php

namespace App\router;

use App\request\Request;

class Router
{

    private $request;
    private $uri;
    private $data;

    public function __construct(Request $request)
    {
        $this->request = $request->getMethod();
        $this->uri = $request->getUri();
        $this->data = [];
    }

    private function rotas()
    {
        return [
            "GET" => [
                "/" => 'Home@index',
                '/user' => "User@index",
                "/user/login" => "User@fmrLogin",
                "/user/criar" => "User@fmrCriar",
                '/user/lista' => "User@listaUser"
            ],
            "POST" => [
                "/user/login" => "User@postLogin",
                "/user/criar" => "User@postCriar"
            ]
        ];
    }

    public function Router()
    {
        $rotas = self::rotas();
        $rota = self::getRouterUri();
        $method = self::getRouterMethod();

        if (self::verificarMethod('GET')) {
            self::verifcarRotaMtehod($rotas,$rota,$method);
        }

        self::verifcarRotaMtehod($rotas,$rota,$method);

    }

    protected function verifcarRotaMtehod($rotas, $rota, $method)
    {
      
        foreach ($rotas as $indice) {
            $contoller = $rotas[$method][$rota] ?? '';
        }
        if ($contoller == '') {
            self::setData(self::loadController("Error@error"));
            return self::loadController("Error@error");
        }
        if(self::verificarMethod('POST')){
            return self::loadController($contoller);
        }
        self::setData(self::loadController($contoller));
        return self::loadController($contoller);
    }

    protected function loadController($contoller)
    {
        $explod = explode('@', $contoller);
        $method = $explod[1];

        if (self::getRouterUri() === 'GET') {
            if (self::controllerExist($contoller)) {

                $instancia = self::requireController($explod[0]);
                return $instancia::$method();
            }
            $method = 'error';
            $instancia = self::requireController('Error');
            return $instancia::$method();
        }
        
        $instancia = self::requireController($explod[0]);
        return $instancia::$method();
    }

    protected function controllerExist($contoller)
    {

        if ($contoller != null) {
            return true;
        }
        return false;
    }

    protected function requireController($controller)
    {
        $instancia = "\\App\\controller\\" . $controller;
        return new $instancia;
    }

    protected function setData($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }

    protected function getRouterUri()
    {
        return $this->uri;
    }

    protected function getRouterMethod()
    {
        return $this->request;
    }

    protected function verificarMethod($method)
    {

        if ($this->request === $method) {
            return true;
        }
        return false;
    }
}
