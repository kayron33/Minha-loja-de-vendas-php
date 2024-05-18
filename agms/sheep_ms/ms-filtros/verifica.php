<?php 

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



?>