<?php
    namespace projetoNovo\Model;
    use projetoNovo\Model;
    class Usuario extends Model{
        private $matricula;
        private $email;
        private $ctt;
        private $id;
        private $nick;
        private $nome;
        private $email_corp;
        private $ctt_corp;
        private $senha;
        private $rank;
        private $Matricula;
            public function __get($atributo){
                return $this->$atributo;
            }
            public function __set($atributo,$valor){
                $this->$atributo=$valor;
            }
            public function solicitarCadastro(){
                $query = "";
                $stmt = $this->db->prepare($query);
                //O primeiro campo abaixo é sobre o dado no banco, o segundo é sobre o dado recebido do controller
                $stmt ->bindValue(':matricula', $this->__get("matr")); 
                $stmt ->bindValue(':email', $this->__get("email")); 
                $stmt ->bindValue(':ctt', $this->__get("ctt")); 
            }
            public function novoCadastro(){
                
            }
    }
?>