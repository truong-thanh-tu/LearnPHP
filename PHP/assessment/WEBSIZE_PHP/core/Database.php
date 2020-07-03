<?php
 class Database extends  WebConfig{
      var $conn ;
    public function __construct()
    {
        $this->conn = new mysqli($this->host,$this->us,$this->pw,$this->db);
        mysqli_set_charset($this->conn,"utf8");
    }
 }
?>
