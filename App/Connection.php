<?php

namespace App;

class Connection{

    public static function getDb(){
        try{
            $conn = new \PDO("mysql:host=localhost;dbname=mangaTo;charset=utf8", "root", "");
            return $conn;
        }catch(\PDOExcepction $e){
            echo 'Erro na Conexão com o Banco: ',  $e->getMessage(), "\n";
        }
    }

}


?>