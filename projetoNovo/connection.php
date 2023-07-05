<?php
namespace projetoNovo;
class Connection{
    public static function getDb(){
        try {
            $conn = new \PDO(
                "mysql:host=localhost;dbname=Formulario_central;charset=utf8",
                "root",
                ""
            );
            return $conn;
        }catch (\PDOException $e){

        }
    }
}

?>