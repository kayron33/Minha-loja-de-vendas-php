<?php 

class Usuario{

    private $Data;
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


    $this->Data['nome'] = (string) $this->Data['nome'];
    $this->Data['sobrenome'] = (string) $this->Data['sobrenome'];
    $this->Data['email'] = (string) $this->Data['email'];
    $this->Data['whatsapp'] = (string) $this->Data['whatsapp'];
    $this->Data['nivel'] = (string) $this->Data['nivel'];
    $this->Data['senha'] = password_hash($this->Data['senha'], PASSWORD_DEFAULT, ['const'=> 10]);
    $this->Data['data'] = date('Y-m-d H:i:s');
   
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

}


?>