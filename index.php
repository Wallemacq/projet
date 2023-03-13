<?php
//print_r($_SERVER);

$request = $_SERVER['REQUEST_URI'];

if($request == '/'){
    $request = '/accueil';
}

$path = "controllers".$request.".php";
if(file_exists($path)){
require $path;
}else{
    require "controllers/404.php";
}

?>

