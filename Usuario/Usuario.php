<?php

require_once '../Pessoa/Pessoa.php';

/**
 *
 * @author Felipe
 */

class Usuario extends Pessoa {
    
    private $Nome;
    private $Login;
    private $Senha;
    private $Tipo;
    
    public function __construct(){
        parent::__construct();
        $this->tabela = "USUARIO";
        
        $this->campopk = "IDUSUARIO";
    }
    
     function setObjeto($objeto = null){
         if ($objeto != null){
            $this->campos = array(
                /*------ USUARIO -------*/
                "NOME" => $objeto->getNome(),
                "LOGIN" => $objeto->getLogin(),
                "SENHA" => $objeto->getSenha(),
                "TIPO" => $objeto->getTipo()
                
            );
        }else{
            $this->campos = array();
        }
    }
    
    public function setNome($nome){
        $this->Nome = $nome;
    }
    
    public function getNome(){
        return $this->Nome;
    }
    
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
    
    public function setTipo($tipo){
        $this->Tipo = $tipo;
    }
    
    public function getTipo(){
        return $this->Tipo;
    }
}

?>