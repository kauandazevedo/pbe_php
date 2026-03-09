<?php

class Database{
    private static $pdo;

    public static function conectar(){
        if(!self::$pdo){
            try{
                self::$pdo = new PDO(
                    'mysql:host=127.0.0.1; 
                    dbname=MVC_biblioteca; // nome da database 
                    charset=utf8', //para identificar que é em portuguÊs
                    'root', //login
                    ''); // seria a senha do mysql
                    self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e){
                die("Erro na conexão: ". $e-> getMessage()); // se aparecer erro na conexão é que está dando erro no banco de dados
            }
        }
         return self::$pdo;
    }
}