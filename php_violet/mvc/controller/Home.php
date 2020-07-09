<?php
class Home extends Controller {
    function index(){
        $product_1 = $this->model("ProductModel");
        echo $product_1->getProduct();
    }
    function Show(){
        $sum = $this->model("ProductModel");
        $sum->Calculater(1,3);
        $this->view("head",[number=>$sum]);
    }
}

?>