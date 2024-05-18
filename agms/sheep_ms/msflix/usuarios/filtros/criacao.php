<div class="main-content" >
<?php 


require_once('ms-filtros/verifica.php');
$criarUsuario = filter_input_array(INPUT_POST,FILTER_SANITIZE_FULL_SPECIAL_CHARS); 


if(isset($criarUsuario['criarSheep'])){
    unset($criarUsuario['criarSheep']);
    
$salvar = new Usuario();

$salvar->Inserir($criarUsuario);
if($salvar->getResultado()){
   header("location:". URL_CAMINHO_PAINEL . FILTROS ."/usuarios/index&sucesso=true");
}else{
    header("location:". URL_CAMINHO_PAINEL . FILTROS ."/usuarios/index&erro=true");
}
}



?>
</div>