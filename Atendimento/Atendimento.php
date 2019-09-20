<?php

require '../Util/daoGenerico.php';
/**
 *
 * @author Felipe
 */

class Atendimento extends daoGenerico{
    
    private $tipoAtendimento;
    
    
    public function __construct(){ 
        parent::__construct();

        $this->tabela = "ATENDIMENTO";

        $this->campopk = "IDATENDIMENTO";
    }
    
    
    function setObjeto($objeto = null){
         if ($objeto != null){
            $this->campos = array(
                /*------ ATENDIMENTO -------*/
                "TIPOATENDIMENTO" => $objeto->getAtendimento()
            );
        }else{
            $this->campos = array();
        }
    }
    
    
    function setAtendimento($atend){
        $this->tipoAtendimento = $atend;
    }
    
    function getAtendimento(){
        return $this->tipoAtendimento;
    }

}

?>