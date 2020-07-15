<?php
class App{
    protected $controller = "login";
 public function __construct()
 {
    $arrs = $this->Url();
    if (file_exists("./mvc/view/".$arrs[0].".php")){

       $this->controller=$arrs[0];
    }
     include('./mvc/view/'.$this->controller.'.php');
 }
 public  function Url(){
     if (isset($_GET['url'])){
         $url= filter_var(trim($_GET['url']));
         return explode('/',$url);
     }
 }
}