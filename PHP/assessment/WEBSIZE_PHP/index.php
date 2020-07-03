<?php
session_start();// Dung de khoi tao thang session
define('BASEPATH',true);// Dinh nghi ra mot hang so nham chong truy cap truc tiep;
include_once ('config.php');// Khai bao tap tin congfig nham lay duoc thong tin trong class ConfigWeb
include_once ('core/Database.php');//Ket noi voi du lieu trong Database
include_once ('core/load.php'); // Tao ra cac ham truyen dan
loadModules('layout');
?>