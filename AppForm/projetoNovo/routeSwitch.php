
<?php

abstract class RouteSwitch{
    /* Validação de autenticação, para que não abra as telas erroneamente. */
    public function vadidaAuth(){
        session_start();
        if(!isset($_SESSION['id'])||$_SESSION['id'] =='' || !isset($_SESSION['nome'])||$_SESSION['nome'] ==''){
            header("Location: /login");
        }
    }
    /* View Index */ 
    protected function signin(){
        require __DIR__ . '/Views/Index/signin.php';
    }
    protected function login(){
        require __DIR__ . '/Views/Index/login.php';
    }
    protected function novaSenha(){
        require __DIR__ . '/Views/User/novaSenha.php';
    }

    /* View User */
    protected function register(){
        require __DIR__ . '/Views/User/register.php';
    }

    /* View admin */
    protected function housekeeping(){
        //$this->validaAuth();
        require __DIR__ . '/Views/Admin/index.php';
    }

    /* View Usuário */
    protected function inicial(){
        //$this->validaAuth();
        require __DIR__ . '/Views/Formulario/index.php';
    }

    /* Chamada para controller */
    protected function appController(){
        require __DIR__ . '/Controllers/AppController.php';
        require __DIR__. '/Model/Model.php';
        require __DIR__. '/Model/Container.php';
    }
    public function __call($name, $arguments){
        http_response_code(404);
        require __DIR__ . '/Views/index/404.php';
    }
}

?>