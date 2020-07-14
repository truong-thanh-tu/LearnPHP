<?php
class DB{
    protected $conn;
    protected $servername = "localhost";
    protected $username = "root";
    protected $password ="";
    protected $dataname = "violet";
    function __construct()
    {
        $this->conn =mysqli_connect($this->servername,$this->username,$this->password,$this->dataname);
        mysqli_select_db($this->conn,$this->servername);
        mysqli_query($this->conn,"SET NAME 'utf8");
    }
}