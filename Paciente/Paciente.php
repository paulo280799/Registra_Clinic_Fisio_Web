<?php

require '../Pessoa/Pessoa.php';

/**
 *
 * @author Felipe
 */

class Paciente extends Pessoa {
    
    private $NumeroProntuario;
    private $PostoDeSaude;
    private $AgenteDeSaude;
    private $PesoPaciente;
    private $AlturaPaciente;
    private $TipoPaciente;
    private $SituacaoPaciente;
    
    public function __construct(){
        parent::__construct();
        
        $this->tabela = "PACIENTE";
        
        $this->campopk = "IDPACIENTE";
    }
    
       
    function setObjeto($objeto = null){
         if ($objeto != null){
            $this->campos = array(
                /*------ PESSOA -------*/
                "NOMEPAC" => $objeto->getNome(),
                "DATANASC" => $objeto->getDataNasc(),
                "SEXOPAC" => $objeto->getSexo(),
                "RGPAC" => $objeto->getRg(),
                "CPFPAC" => $objeto->getCpf(),
                "ESTADOCIVIL" => $objeto->getEstadoCivil(),
                "ENDERECOPAC" => $objeto->getEndereco(),
                "RUAPAC" => $objeto->getRua(),
                "BAIRROPAC" => $objeto->getBairro(),
                "CIDADEPAC" => $objeto->getCidade(),
                "PROFISSAOPAC" => $objeto->getProfissao(),
                "TELEFONEPAC" => $objeto->getTelefone(),
                /*------- PACIENTE --------*/
                "NUMEROPRONT" => $objeto->getNumeroProntuario(),
                "POSTOSAUDE" => $objeto->getPostoDeSaude(),
                "AGENTESAUDE" => $objeto->getAgenteDeSaude(),
                "PESOPAC" => $objeto->getPesoPaciente(),
                "ALTURAPAC" => $objeto->getAlturaPaciente(),
                "TIPOPAC" => $objeto->getTipoPaciente(),
                "SITUACAOPAC" => $objeto->getSituacaoPaciente()
            );
        }else{
            $this->campos = array();
        }
    }
    
    
    function setNumeroProntuario($num){
        $this->NumeroProntuario = $num;
    }
    
    function getNumeroProntuario(){
        return $this->NumeroProntuario;
    }
    
    function setPostoDeSaude($posto){
        $this->PostoDeSaude = $posto;
    }
    
    function getPostoDeSaude(){
        return $this->PostoDeSaude;
    }
    
    function setAgenteDeSaude($agente){
        $this->AgenteDeSaude = $agente;
    }
    
    function getAgenteDeSaude(){
        return $this->AgenteDeSaude;
    }
    
    function setPesoPaciente($peso){
        $this->PesoPaciente = $peso;
    }
    
    function getPesoPaciente(){
        return $this->PesoPaciente;
    }
    
    function setAlturaPaciente($altura){
        $this->AlturaPaciente = $altura;
    }
    
    function getAlturaPaciente(){
        return $this->AlturaPaciente;
    }
    
     function setTipoPaciente($tipo){
        $this->TipoPaciente = $tipo;
    }
    
    function getTipoPaciente(){
        return $this->TipoPaciente;
    }
    
    function setSituacaoPaciente($situacao){
        $this->SituacaoPaciente = $situacao;
    }
    
    function getSituacaoPaciente(){
        return $this->SituacaoPaciente;
    }
    
}

?>