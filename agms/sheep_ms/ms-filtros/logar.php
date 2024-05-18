<?php 
ob_start();
session_start();
require_once('../../sheep_core/config.php');


$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if($email == null || $senha == null){
  
  
    header("location:" .URL_CAMINHO_PAINEL . "index.php?sheep_campos_vazios=true");
    return false;
    exit();

}else{
    $logar = new Acessar();
    $logar->Entrar($email,$senha);

    if($logar->getResultado()){
        $_SESSION['msflix_user'] = $logar->getResultado();
        header("location:" .URL_CAMINHO_PAINEL . "sheep.php");


    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
        header("location:" .URL_CAMINHO_PAINEL . "index.php?sheep_senha_incorreta=true");
        return false;
        exit();
    
    

    }
}

?>