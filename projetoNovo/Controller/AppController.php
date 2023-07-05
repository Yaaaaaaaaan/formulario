<?php 
$action = $_POST['acao'];
$AppController = new AppController;
$AppController->acao($action);

    class AppController{
        var $matr;
        var $email;
        var $ctt;
       public function acao(string $action){
           if($action === 'solicitarCadastro()'){
                $this -> solicitarCadastro();
           }else if($action === 'cadastrarUsuario()'){
                $this -> cadastrarUsuario();
           }

        }
        public function solicitarCadastro(){
            $matr = $_POST['matr'];
            $email = $_POST['email'];
            $ctt = $_POST['ctt'];

            // Primeira parte já feita. Classe criada e código recebido.
            
            echo "A matrícula é: ".$matr;
        }
        public function cadastrarUsuario(){
            $email = $_POST['email'];

            echo "O email é: " .$email;
        }
    }
?>