<?php
class DB {
    protected $host = "localhost";
    protected $user = "root";
    protected  $pass ="";
    protected $db = "lap";

    function __construct()
    {
        $conn = mysqli_connect($this->host,$this->user,$this->pass,$this->db);
    }
}