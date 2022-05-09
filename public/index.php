<?php
require __DIR__.'/../bootstrap.php';


if($request->getMethod() === 'GET'){
  include $view->loadView('templates/header');
  include $view->loadView('templates/topBar');
  include $view->loadView($page);
  include $view->loadView('templates/footer');
}
