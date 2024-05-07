<?php


//Singleton
class Conexao {
    private static $instance;

    public static function getConn(){
        //Verificação se já existe uma instância, caso exista ele reaproveita
        if (!isset(self::$instance)){
            self::$instance = new \PDO('pgsql:host=localhost;port=5432;dbname=PI-POO;charset=utf8','postgres', 'isaac020492.');
        }
    
        return self::$instance;
    }
}