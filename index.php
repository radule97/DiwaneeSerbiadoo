<?php
require "config.php";

$page = isset($_GET['page']) ? $_GET['page'] : 'index';
$controller = new Controller;
$controller->$page();
// if($_SERVER["REQUEST_METHOD"] == "POST"){
//   if($page == 'register'){
//     $controller1 = new Controller;
//     $controller1->registerUserController($_REQUEST['username'], $_REQUEST['password'], $_REQUEST['cfpassword']);
//   }
//   else{
//     $controller1 = new Controller;
//     $controller1->loginUserController($_REQUEST['username'], $_REQUEST['password']);
//   }
// }
