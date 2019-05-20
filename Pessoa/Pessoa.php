<?php

require '../Util/daoGenerico.php';


class Pessoa extends daoGenerico{
    
    private $Nome;
    private $DataNasc;
    private $Sexo;
    private $Rg;
    private $Cpf;
    private $EstadoCivil;
    private $Endereco;
    private $Bairro;
    private $Rua;
    private $Cidade;
    private $Profissao;
    private $Telefone;
    
    function setNome($nome){
        $this->Nome = $nome;            
    }
    
    function getNome(){
        return $this->Nome;
    }
    
    function setDataNasc($dataNasc){
        $this->DataNasc = $dataNasc;            
    }
    
    function getDataNasc(){
        return $this->DataNasc;
    }
    
    function setSexo($sexo){
        $this->Sexo = $sexo;            
    }
    
    function getSexo(){
        return $this->Sexo;
    }
    
    function setRg($rg){
        $this->Rg = $rg;            
    }
    
    function getRg(){
        return $this->Rg;
    }
    
    function setCpf($cpf){
        $this->Cpf = $cpf;            
    }
    
    function getCpf(){
        return $this->Cpf;
    }
    
    function setEstadoCivil($estado){
        $this->EstadoCivil = $estado;            
    }
    
    function getEstadoCivil(){
        return $this->EstadoCivil;
    }
    
    function setEndereco($endereco){
        $this->Endereco = $endereco;            
    }
    
    function getEndereco(){
        return $this->Endereco;
    }
    
    function setBairro($bairro){
        $this->Bairro = $bairro;            
    }
    
    function getBairro(){
        return $this->Bairro;
    }
    
    function setRua($rua){
        $this->Rua = $rua;            
    }
    
    function getRua(){
        return $this->Rua;
    }
    
    function setCidade($cidade){
        $this->Cidade = $cidade;            
    }
    
    function getCidade(){
        return $this->Cidade;
    }
    
    function setProfissao($profissao){
        $this->Profissao = $profissao;            
    }
    
    function getProfissao(){
        return $this->Profissao;
    }
    
    function setTelefone($tel){
        $this->Telefone = $tel;            
    }
    
    function getTelefone(){
        return $this->Telefone;
    }
}




?>