<?php
    namespace projetoNovo\Models\Usuario;
    use projetoNovo\Model\Model;
    class Usuario extends Model{
        private $matr;
        private $email;
        private $ctt;
        private $id;
        private $nick;
        private $nome;
        private $email_corp;
        private $ctt_corp;
        private $senha;
        private $rank;
            public function __get($atributo){
                return $this->$atributo;
            }
            public function __set($atributo,$valor){
                $this->$atributo=$valor;
            }
            public function solicitarCadastro(){
                $query = "INSERT INTO valida_usuario (matricula,email,ctt) VALUES (:matr, :email, :ctt);";
                $stmt = $this->db->prepare($query);
                //O primeiro campo abaixo é sobre o dado no banco, o segundo é sobre o dado recebido do controller
                $stmt ->bindValue(':matr', $this->__get("matr")); 
                $stmt ->bindValue(':email', $this->__get("email")); 
                $stmt ->bindValue(':ctt', $this->__get("ctt")); 
                $stmt->execute();
                return $this;
            }
            public function novoCadastro(){
                
            }
    }
?>