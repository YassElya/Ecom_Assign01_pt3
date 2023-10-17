<?php
class Model{
    protected static $_conn = null;

    public function __construct(){
        if(self::$_conn == null){
            $host = 'localhost';
            $dbname = 'A01_part3';
            $user = 'root';
            $password = '';
            self::$_conn = new PDO("mysql:host=$host;dbname=$dbname",$user,$password);
        }
    }
}



?>