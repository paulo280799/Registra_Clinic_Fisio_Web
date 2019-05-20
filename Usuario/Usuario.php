<?php

require_once '../Pessoa/Pessoa.php';

/**
 *
 * @author Felipe
 */

class Usuario extends Pessoa {
    
    private $login;
    private $senha;
    
    public function __construct($campos = array()){
        parent::__construct();
        $this->tabela = "USUARIO";

        if (sizeof($campos) <= 0){
            $this->campos = array(
                "LOGIN" => NULL,
                "SENHA" => NULL
            );
        }else{
            $this->campos = $campos;
        }
        
        $this->campopk="IDUSUARIO";
    }
    
    
    public function setLogin($login){
        $this->login = $login;
    }
    
    public function getLogin(){
        return $this->login;
    }
    
    public function setSenha($senha){
        $this->senha = $senha;
    }
    
    public function getSenha(){
        return $this->senha;
    }
}

?>