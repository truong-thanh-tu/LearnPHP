<?php
class Shop extends Controller {
    function  index(){

       $products = $this->model('ProductModel');
       $this->view('share',['Page'=>'Shop','File'=>'page','Product'=>$products->Product()]);
    }
    function detail_product(){
        $this->view('share',['Page'=>'Detail_product','File'=>'page']);
    }
    function checkout(){
        $this->view('share',['Page'=>'Checkout','File'=>'page']);
    }
    function shopping_cart(){
        $this->view('share',['Page'=>'Shopping_cart','File'=>'page']);
    }
}