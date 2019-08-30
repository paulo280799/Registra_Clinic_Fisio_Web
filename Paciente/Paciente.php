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
                "DATANASCPAC" => $objeto->getDataNasc(),
                "SEXOPAC" => $objeto->getSexo(),
                "RGPAC" => $objeto->getRg(),
                "CPFPAC" => $objeto->getCpf(),
                "ESTADOCIVILPAC" => $objeto->getEstadoCivil(),
                "ENDERECOPAC" => $objeto->getEndereco(),
                "BAIRROPAC" => $objeto->getBairro(),
                "CIDADEPAC" => $objeto->getCidade(),
                "PROFISSAOPAC" => $objeto->getProfissao(),
                "TELEFONEPAC" => $objeto->getTelefone(),
                /*------- PACIENTE --------*/
                "NUMEROPRONT" => $objeto->getNumeroProntuario(),
                "POSTOSAUDE" => $objeto->getPostoDeSaude(),
                "AGENTESAUDE" => $objeto->getAgenteDeSaude(),
                "PESOPAC" => $objeto->getPeso(),
                "ALTURAPAC" => $objeto->getAltura(),
                "SITUACAOPAC" => $objeto->getSituacao()
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
    
    function setPeso($peso){
        $this->PesoPaciente = $peso;
    }
    
    function getPeso(){
        return $this->PesoPaciente;
    }
    
    function setAltura($altura){
        $this->AlturaPaciente = $altura;
    }
    
    function getAltura(){
        return $this->AlturaPaciente;
    }
    
    function setSituacao($situacao){
        $this->SituacaoPaciente = $situacao;
    }
    
    function getSituacao(){
        return $this->SituacaoPaciente;
    }
    
}

?>