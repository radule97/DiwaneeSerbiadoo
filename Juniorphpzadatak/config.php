<?php
function __autoload($class){
  if(file_exists("App/Model/{$class}.php")){
    require_once "App/Model/{$class}.php";
  }
  else if (file_exists("App/Controller/{$class}.php")){
    require_once "App/Controller/{$class}.php";
  }
}
