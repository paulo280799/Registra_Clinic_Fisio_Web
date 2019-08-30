<?php

require_once '../Pessoa/Pessoa.php';

/**
 *
 * @author Felipe
 */

class Usuario extends Pessoa{
    
    private $Login;
    private $Senha;
    

    public function setLogin($login){
        $this->Login = $login;
    }
    
    public function getLogin(){
        return $this->Login;
    }
    
    public function setSenha($senha){
        $this->Senha = $senha;
    }
    
    public function getSenha(){
        return $this->Senha;
    }
    
}

?>