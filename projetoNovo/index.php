<?php

require_once __DIR__ . '/Router.php';

$requestUri = $_SERVER['REQUEST_URI'];

$router = new Router;
$router->run($requestUri);

//gera o código que joga pro router além de executar a função
?>