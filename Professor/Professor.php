<?php

require '../Pessoa/Pessoa.php';

/**
 *
 * @author Felipe
 */

class Professor extends Pessoa {
    
    private $Especializacao;
    
    public function __construct(){
        parent::__construct();
        
        $this->tabela = "PROFESSOR";
        
        $this->campopk = "IDPROFESSOR";
    }
    
       
    function setObjeto($objeto = null){
         if ($objeto != null){
            $this->campos = array(
                /*------ PESSOA -------*/
                "NOMEPROF" => $objeto->getNome(),
                "DATANASC" => $objeto->getDataNasc(),
                "SEXOPROF" => $objeto->getSexo(),
                "RGPROF" => $objeto->getRg(),
                "CPFPROF" => $objeto->getCpf(),
                "ESTADOCIVIL" => $objeto->getEstadoCivil(),
                "ENDERECOPROF" => $objeto->getEndereco(),
                "RUAPROF" => $objeto->getRua(),
                "BAIRROPROF" => $objeto->getBairro(),
                "TELEFONEPROF" => $objeto->getTelefone(),
                /*------- PACIENTE --------*/
                "ESPECIALIZACAO" => $objeto->getEspecializacao()
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
    
    
}

?>