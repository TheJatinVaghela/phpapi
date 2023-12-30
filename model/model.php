<?php
class model 
{   
    public $assets = "/public/assets";
    public $connection;
    private $host = "localhost";
    private $db = "phpapi";
    private $password = "";
    private $username = "root";
    public function __construct(){
        $this->connect_server();

    }
   protected function connect_server(){
        $this->connection = new mysqli($this->host,$this->username , $this->password ,$this->db);
    }

}