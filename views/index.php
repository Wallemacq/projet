<?php
//print_r($_SERVER);
$request = str_replace('/exercice/exercice9','',$_SERVER['REQUEST_URI']);

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


<?php
//print_r($_SERVER);
$request = str_replace('/exercice/exercice9','',$_SERVER['REQUEST_URI']);

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


