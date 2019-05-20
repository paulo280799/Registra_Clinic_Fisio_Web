<?php

require '../Usuario/Usuario.php';

/**
 *
 * @author Felipe
 */
class Aluno extends Usuario{
    
    private $Matricula;
    
    
    public function __construct(){
        parent::__construct();

        $this->tabela = "ALUNO";

        $this->campopk="IDALUNO";
    }
    
    
    function setObjeto($objeto = null){
         if ($objeto != null){
            $this->campos = array(
                /*------ PESSOA -------*/
                "NOMEALUNO" => $objeto->getNome(),
                "DATANASC" => $objeto->getDataNasc(),
                "SEXOALUNO" => $objeto->getSexo(),
                "RGALUNO" => $objeto->getRg(),
                "CPFALUNO" => $objeto->getCpf(),
                "ESTADOCIVIL" => $objeto->getEstadoCivil(),
                "ENDERECOALUNO" => $objeto->getEndereco(),
                "RUAALUNO" => $objeto->getRua(),
                "BAIRROALUNO" => $objeto->getBairro(),
                "CIDADEALUNO" => $objeto->getCidade(),
                "PROFISSAOALUNO" => $objeto->getProfissao(),
                "TELEFONEALUNO" => $objeto->getTelefone(),
                /*------ USUARIO -------*/
                "LOGINALUNO" => $objeto->getLogin(),
                "SENHAALUNO" => $objeto->getSenha(),
                /*------- ALUNO --------*/
                "MATRICULAALUNO" => $objeto->getMatricula()
            );
        }else{
            $this->campos = array();
        }
    }
    
    
    function setMatricula($matricula){
        $this->Matricula = $matricula;
    }
    
    function getMatricula(){
        return $this->Matricula;
    }
}

?>