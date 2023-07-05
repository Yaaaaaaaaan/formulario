
<?php

abstract class RouteSwitch
{
    protected function signin()
    {
        require __DIR__ . '/View/signin.php';
    }

    protected function login()
    {
        require __DIR__ . '/View/login.php';
    }

    /*protected function contact()
    {
        require __DIR__ . '/View/contact.html';
    }
    
    protected function __call($name, $arguments)
    {
        http_response_code(404);
        require __DIR__ . '/View/not-found.html';
    }*/
}

?>