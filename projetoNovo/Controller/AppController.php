<?php 
$function = $_POST['func'];
        call_user_func($function);


    class AppController{
        var $matr;
        var $email;
        var $ctt;
        var $a;
       public function solicitarCadastro(){
            $matr = $_POST['matr'];
            echo "A matrícula é: ".$matr;
        }
        public function cadastrarUsuario(){
            $a = $_POST['email'];
        }
    }
?>