<div class="main-content" >
<?php 
$criarUsuario = filter_input_array(INPUT_POST,FILTER_SANITIZE_FULL_SPECIAL_CHARS); 


if(isset($criarUsuario['criarSheep'])){
    unset($criarUsuario['criarSheep']);
    var_dump($criarUsuario);
}



?>
</div>