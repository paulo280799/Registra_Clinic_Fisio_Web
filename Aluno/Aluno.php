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

        $this->campopk = "IDALUNO";
    }
    
    
    function setObjeto($objeto = null){
         if ($objeto != null){
            $this->campos = array(
                /*------ PESSOA -------*/
                "NOMEALUNO" => $objeto->getNome(),
                "DATANASCALUNO" => $objeto->getDataNasc(),
                "SEXOALUNO" => $objeto->getSexo(),
                "RGALUNO" => $objeto->getRg(),
                "CPFALUNO" => $objeto->getCpf(),
                "ESTADOCIVILALUNO" => $objeto->getEstadoCivil(),
                "ENDERECOALUNO" => $objeto->getEndereco(),
                "BAIRROALUNO" => $objeto->getBairro(),
                "CIDADEALUNO" => $objeto->getCidade(),
                "PROFISSAOALUNO" => $objeto->getProfissao(),
                "TELEFONEALUNO" => $objeto->getTelefone(),
                /*------- ALUNO --------*/
                "MATRICULAALUNO" => $objeto->getMatricula(),
                /*------- USUARIO --------*/
                "LOGIN" => $objeto->getLogin(),
                "SENHA" => $objeto->getSenha()
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