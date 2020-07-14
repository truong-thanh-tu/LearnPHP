<?php
class Home extends Controller {
    function index(){
        $models = $this->model('ProductModel');
        $this->view('Share',[
            'Page'=>'Home',
            'File'=>'page',
            'Slider'=>$models->Slider(),
            'Freatures'=>$models->Freatures(),
            'Product'=>$models->Product()
        ]);
    }

}

?>