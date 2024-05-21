<?php 

class Usuario{

    private $Data;
    private $Id;
    private $Resultado;

    const BD = 'usuarios';
    public function Inserir(array $data){
        $this->Data= $data;
        if(in_array('', $this->Data)){
            $this->Resultado =false;
            return false;
        }
        $this->Banco();
        $this->criarUsuario();

    } 

    public function AtualizaUsuario(int $id, array $data){
        
        $this->Id= $id;
        $this->Data= $data;

        if(!$this->Data['senha']){
            unset($this->Data['senha']);
        }



        if(!$this->Data){
            $this->Resultado = false;

        }

        $this->Banco();
        $this->VamosAtualizarUsuario();



    }

public function getResultado()
{
    return $this -> Resultado;
}



private function Banco()
{

    $this->Data = array_map('trim', $this->Data);
    $this->Data = array_map('addslashes', $this->Data);
    $this->Data = array_map('htmlspecialchars', $this->Data);
    preg_replace('/[^[:alnum:]@]/','',$this->Data);

    if(isset($this->Data['atualizarSheep'])){
        unset($this->Data['data']);
     }else{
         $this->Data['data'] = date('Y-m-d H:i:s');
     }

    unset($this->Data['id'], $this->Data['atualizarSheep']);


    $this->Data['nome'] = (string) $this->Data['nome'];
    $this->Data['sobrenome'] = (string) $this->Data['sobrenome'];
    $this->Data['email'] = (string) $this->Data['email'];
    $this->Data['whatsapp'] = (string) $this->Data['whatsapp'];
    $this->Data['nivel'] = (string) $this->Data['nivel'];
   
   
if(isset($this->Data['senha'])){
    $this->Data['senha'] = password_hash($this->Data['senha'], PASSWORD_DEFAULT, ['const'=> 10]);
}else{
    unset($this->Data['senha']);
}

    
   
}


private function criarUsuario()
{
    $criar = new Criar();
    $criar->Criacao(self::BD,$this->Data);

    if($criar->getResultado()){
        $this->Resultado = true;
        return true;
    }

}

private function VamosAtualizarUsuario(){
    $atualizaUsuario= new Atualizar();
    $atualizaUsuario->Atualizando(self::BD, $this ->Data, "WHERE id = :id", "id={$this->Id}");
    if($atualizaUsuario->getResultado()){
        return true;
    }
}


}


?>