<?php

require_once __DIR__ . '/RouteSwitch.php';

class Router extends RouteSwitch
{
    public function run(string $requestUri) 
    // passa a variável para a função como string
    {
        $route = substr($requestUri, 1);

        if ($route === '') {
            $this->signin();
        } else {
            $this->$route();
        }
    }
}

?>