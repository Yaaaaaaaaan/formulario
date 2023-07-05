
<?php

abstract class RouteSwitch{
    /* Validação de autenticação, para que não abra as telas erroneamente. */
    protected function vadidaAuth(){
        session_start();
        if(!isset($_SESSION['id'])||$_SESSION['id'] =='' || !isset($_SESSION['nome'])||$_SESSION['nome'] ==''){
            header("Location: /login");
        }
    }
    /* View Index */ 
    protected function signin(){
        require __DIR__ . '/View/index/signin.php';
    }
    protected function login(){
        require __DIR__ . '/View/index/login.php';
    }

    /* View User */
    protected function register(){
        require __DIR__ . '/View/user/register.php';
    }

    /* View admin */
    protected function admin(){
        $this->validaAuth();
        require __DIR__ . '/View/admin/index.php';
    }

    /* Chamada para controller */
    protected function appController(){
        require __DIR__ . '/Controller/AppController.php';
    }
    public function __call($name, $arguments){
        http_response_code(404);
        require __DIR__ . '/View/index/404.php';
    }
}

?>