<?php
	namespace projetoNovo\Controllers;
    use projetoNovo\Model\Container;

    $acao = $_POST['acao'];
    $AppController = new AppController;
    $AppController->acao($acao);

    class AppController{
        var $matr;
        var $email;
        var $ctt;
        var $nick;
        //onde se faz o direcionamento das requisições dos formulários
       public function acao(string $acao){
           if($acao === 'solicitarCadastro()'){
                $this -> solicitarCadastro();
           }else if($acao === 'cadastrarUsuario()'){
                $this -> cadastrarUsuario();
           }else if($acao=== 'autenticar()'){
                $this -> autenticar();
           }else if($acao=== 'sair()'){
            $this -> sair();
           }else if($acao=== 'novaSenha()'){
            $this -> novaSenha();
           }

        }
        //Solicitação do cadastro para avaliação do admin
        public function solicitarCadastro(){
            $matr = $_POST['matr'];
            $email = $_POST['email'];
            $ctt = $_POST['ctt'];

            // Primeira parte já feita. Classe criada e código recebido.
            $usuario = Container::getModel('Usuario');
            $usuario->__set('matr',$_POST['matr']);
            $usuario->__set('email',$_POST['email']);
            $usuario->__set('ctt',$_POST['ctt']);
            header('location: /login');
        }
        //cadastro do usuário, após aprovação do admin
        public function cadastrarUsuario(){
            $email = $_POST['email'];

            echo "O email é: " .$email;
        }
        //autenticação de acesso no sistema
        public function autenticar(){
            $nick = $_POST['nick'];
            header('location:/inicial');
        }
        //saída do sistema
        public function sair(){
            //session_destroy();
            header('location: /login');
        }
        //requisição de nova senha por parte do usuário
        public function novaSenha(){
            $nick= $_POST['nick'];
            $email = $_POST['email'];
            echo $email;
            //estudar a possibilidade de transferir informações via get para a tela /login (Recebemos sua solicitação de alteração de senha, em breve entraremos em contato via e-mail.)
            header('location: /login');
        }
    }
?>