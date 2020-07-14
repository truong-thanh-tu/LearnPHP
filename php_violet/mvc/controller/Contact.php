<?php
class Contact extends Controller {
    function index(){
           $this->model('ProductModel');
            $this->view('share',['Page'=>'Contact','File'=>'page']);
    }
}