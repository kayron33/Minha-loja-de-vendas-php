<?php 
class Acessar{

     private  $Email;
     private  $Senha;
     private $Resultado;



     const BD= 'usuarios';

     public function Entrar(string $email, string $senha)
     {
        $this->Email = filter_var($email,FILTER_SANITIZE_EMAIL);
        $this->Senha = filter_var($senha,FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  
        if(!Formata::Email($this->Email)){
            
            $this->Resultado= false;
            return false;
        }


        $this->VerificaUsuario();
  
  
  
    }
    public function getResultado()
    {
        return $this->Resultado;
    }



    private function VerificaUsuario()
    {
        $ler = new Ler();
        $ler-> Leitura(self::BD, "WHERE email = :em", "em={$this->Email}");
        if($ler->getResultado()){
            if(password_verify($this->Senha,$ler->getResultado() [0]['senha'])){
                $this->Resultado = $ler->getResultado() [0];
                return true;

            }
        }

    }
}






?>