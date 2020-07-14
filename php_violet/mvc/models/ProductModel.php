<?php
class ProductModel extends DB {
    public function  Product(){
        $qr = "SELECT * FROM product";
        return mysqli_query($this->conn,$qr);
    }
    public function Slider(){
        $qr = "SELECT * FROM slider";
        return mysqli_query($this->conn,$qr);
    }
    public function Freatures(){
        $qr = "SELECT * FROM features";
        return mysqli_query($this->conn,$qr);
    }
}