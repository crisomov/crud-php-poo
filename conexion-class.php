<?php

class Conexion{

    private string $server;
    private string $user;
    private string $password;
    private string $database;
    
    public function __construct(){

        $this->server="127.0.0.1";
        $this->user="root";
        $this->password="";
        $this->database="automotora";
      
    }

    public function getConnection(){


        $mysqli = new mysqli($this->server,$this->user,$this->password,$this->database);
    
        if ($mysqli->connect_errno) {
        
            return "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        
        }else{
            
            return $mysqli;
        }
    }
}

?>