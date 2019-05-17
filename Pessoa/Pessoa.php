<?php

require '../Util/daoGenerico.php';


class Pessoa extends daoGenerico{
    
    private $Nome;
    private $dataNasc;
    private $sexo;
    private $rg;
    private $cpf;
    private $estadoCivil;
    private $endereco;
    private $bairro;
    private $rua;
    private $cidade;
    private $profissao;
    private $telefone;
    
    public function setNome($nome){
        $this->Nome = $nome;
    }
    
    public function getNome(){
        return $this->Nome;
    }
}




?>