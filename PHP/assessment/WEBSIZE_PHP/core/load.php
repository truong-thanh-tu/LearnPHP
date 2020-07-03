<?php
// Ham co chuc nang lay thong tin tu data ve web
// Ham loat thong tin tu thuc muc models
function loadModels($name){
    $name = ucfirst(strtolower($name));
    $path = "models/".$name.".php";
    if (file_exists($path)){
        include ($path);
        $modelsclass = new $name;
        return $modelsclass;
    }
    else{
        echo "Not template ".$name."in data";
        return NULL;
    }
}
function loadModules($name){
    $path = "view/modules/".$name.".php";
    if (file_exists($path)){
        include ($path);
    }
    else{
        echo "Not template ".$name."in data";
    }
}
function loadComponents(){
    $path = "view/componets/";
    if(isset($_REQUEST['option'])){
        $path = $_REQUEST['option'].'/';
        if (isset($_REQUEST['id'])){
            $path = "detail.php";
        }
        else{
            if (isset($_REQUEST['cat'])){
                $path='category.php';
            }
            else{
                $path='index.php';
            }
        }
    }
    else{
        $path = "trangchu/index.php";
    }
    if (file_exists($path)){
        include_once ($path);
    }
    else{
        echo $path." Does not exits";
    }
}
function loadClass($name){
    $name = ucfirst(strtolower($name));
    $path = "core/".$name.".php";
    if (file_exists($path)){
        include ($path);
        $modelsclass = new $name;
        return $modelsclass;
    }
    else{
        echo "Not template ".$name." in data";
        return NULL;
    }
}
?>

