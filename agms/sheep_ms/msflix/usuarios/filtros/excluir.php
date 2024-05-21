<div class="main-content" >
<?php 


require_once('ms-filtros/verifica.php');
$id = filter_input(INPUT_POST, 'idDelete', FILTER_VALIDATE_INT ); 


if($id){ 
$salvar = new Usuario();

$salvar->DeletarUsuario($id);
if($salvar->getResultado()){
   header("location:". URL_CAMINHO_PAINEL . FILTROS ."/usuarios/index&sucesso=true");
}else{
    header("location:". URL_CAMINHO_PAINEL . FILTROS ."/usuarios/index&");
}
}



?>
</div>