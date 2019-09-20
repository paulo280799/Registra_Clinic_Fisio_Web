<?php

require '../Usuario/Usuario.php';

/**
 *
 * @author Felipe
 */

class Professor extends Usuario {
    
    private $Especializacao;
    private $coordenador;
    
    public function __construct(){
        parent::__construct();
        
        $this->tabela = "PROFESSOR";
        
        $this->campopk = "IDPROF";
    }
    
       
    function setObjeto($objeto = null){
         if ($objeto != null){
            $this->campos = array(
                /*------ PESSOA -------*/
                "NOMEPROF" => $objeto->getNome(),
                "DATANASCPROF" => $objeto->getDataNasc(),
                "SEXOPROF" => $objeto->getSexo(),
                "RGPROF" => $objeto->getRg(),
                "CPFPROF" => $objeto->getCpf(),
                "ESTADOCIVILPROF" => $objeto->getEstadoCivil(),
                "ENDERECOPROF" => $objeto->getEndereco(),
                "BAIRROPROF" => $objeto->getBairro(),
                "CIDADEPROF" => $objeto->getCidade(),
                "TELEFONEPROF" => $objeto->getTelefone(),
                /*------- PROFESSOR --------*/
                "ESPECIALIZACAO" => $objeto->getEspecializacao(),
                "COORDENADOR" => $objeto->getCoordenador(),
                /*------- USUARIO --------*/
                "LOGIN" => $objeto->getLogin(),
                "SENHA" => $objeto->getSenha()
            );
        }else{
            $this->campos = array();
        }
    }
    
    
    function setEspecializacao($especializacao){
        $this->Especializacao = $especializacao;
    }
    
    function getEspecializacao(){
        return $this->Especializacao;
    }
    

    function setCoordenador($coord){
        $this->coordenador = $coord;
    }
    
    function getCoordenador(){
        return $this->coordenador;
    }
    
    
}

?>