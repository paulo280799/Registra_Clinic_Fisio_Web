<?php

require '../Usuario/Usuario.php';

/**
 *
 * @author Fernando
 */

class Professor extends Usuario {
    
    private $Especializacao;
    
    public function __construct(){
        parent::__construct();
        
        $this->tabela = "SUPERVISOR";
        
        $this->campopk = "IDSUPERVISOR";
    }
    
       
    function setObjeto($objeto = null){
         if ($objeto != null){
            $this->campos = array(
                /*------ PESSOA -------*/
                "NOMESUPER" => $objeto->getNome(),
                "DATANASCSUPER" => $objeto->getDataNasc(),
                "SEXOSUPER" => $objeto->getSexo(),
                "RGSUPER" => $objeto->getRg(),
                "CPFPROF" => $objeto->getCpf(),
                "ESTADOCIVILSUPER" => $objeto->getEstadoCivil(),
                "ENDERECOSUPER" => $objeto->getEndereco(),
                "BAIRROSUPER" => $objeto->getBairro(),
                "CIDADESUPER" => $objeto->getCidade(),
                "TELEFONESUPER" => $objeto->getTelefone(),
                /*------- PROFESSOR --------*/
                "ESPECIALIZACAO" => $objeto->getEspecializacao(),
                "NATURALIDADE" => $objeto->getNaturalidade();
                "OCUPACAO" = > $objeto->getOcupacao();
                "PROFISSAO" = > $objeto->getProfissao();
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
    
    function setNaturalidade($naturalidade){
        $this->Naturalidade = $naturalidade;
    }
    
    function getNaturalidade(){
        return $this->Naturalidade;
    }

    function setOcupacao($ocupacao){
        $this->Ocupacao = $ocupacao;
    }
    
    function getOcupacao(){
        return $this->Ocupacao;
    }
    
    function setProficao($proficao){
        $this->Proficao = $proficao;
    }
    
    function getProficao(){
        return $this->Proficao;
    }
    
    
    
}

?>