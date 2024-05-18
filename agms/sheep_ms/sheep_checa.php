<?php
ob_start();
session_cache_expire(60);

session_start();
require('../sheep_core/config.php');

if($_SESSION['msflix_user'] ['nivel'] =='adm'){


    null;

}else{
    unset($_SESSION['msflix_user']);
    header("Location:" . URL_CAMINHO_PAINEL . "index.php?sheep_saiu=true");
    exit();
}



if(!$_SESSION['msflix_user']){
    unset($_SESSION['msflix_user']);
    header("Location:" . URL_CAMINHO_PAINEL . "index.php?sheep_saiu=true");
    exit();
}


//.php?sair=true
$sair= filter_input(INPUT_GET, 'sair', FILTER_VALIDATE_BOOLEAN);
if($sair){
    unset($_SESSION['msflix_user']);
    header("Location:" . URL_CAMINHO_PAINEL . "index.php?sheep_saiu=true");
    exit();
}



$see_uri = filter_input(INPUT_SERVER, 'REQUEST_URI');
$ms = filter_input(INPUT_GET, 'm', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
?>