<?php

require '../Util/daoGenerico.php';
/**
 *
 * @author Felipe
 */
class Triagem extends daoGenerico{
    
    private $prioridade;
    private $atendimento;
    private $paciente;
    private $dataTriagem;
    
    
    public function __construct(){ 
        parent::__construct();

        $this->tabela = "TRIAGEM";

        $this->campopk = "IDTRIAGEM";
    }
    
    
    function setObjeto($objeto = null){
         if ($objeto != null){
            $this->campos = array(
                /*------ PESSOA -------*/
                "PRIORIDADE" => $objeto->getPrioridade(),
                "DATATRIAGEM" => $objeto->getDataTriagem(),
                "IDPAC" => $objeto->getPaciente(),
                "IDATEND" => $objeto->getAtendimento()
            );
        }else{
            $this->campos = array();
        }
    }
    
    
    function setPrioridade($prioridade){
        $this->prioridade = $prioridade;
    }
    
    function getPrioridade(){
        return $this->prioridade;
    }

    function setAtendimento($atend){
        $this->atendimento = $atend;
    }
    
    function getAtendimento(){
        return $this->atendimento;
    }

    function setPaciente($paciente){
        $this->paciente = $paciente;
    }
    
    function getPaciente(){
        return $this->paciente;
    }

    function setDataTriagem($data){
        $this->dataTriagem = $data;
    }
    
    function getDataTriagem(){
        return $this->dataTriagem;
    }


}

?>