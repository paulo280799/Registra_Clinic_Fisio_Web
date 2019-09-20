<?php
require '../Util/daoGenerico.php';
/**
 *
 * @author Fernando
 */

class Anamnese extends daoGenerico{
    
    private $queixaPrincipal;
    private $hpp;
    private $hda;
    private $historicoFamiliar;
    private $historicoSocial;
    private $pa;
    private $fr;
    private $fc;
    private $temperatura;
    private $examesComplementares;
    
    public function __construct(){
        parent::__construct();
        $this->tabela = "ANAMNESE";
        
        $this->campopk = "IDANAMNESE";
    }
    
       
    function setObjeto($objeto = null){
         if ($objeto != null){
            $this->campos = array(  
                "QUEIXAPRINCIPAL" => $objeto->getQueixaPrincipal(),
                "HPP" => $objeto->getHpp(),
                "HDA" => $objeto->getHda(),
                "HISTORICOFAMILIAR" => $objeto->getHistoricoFamiliar(),
                "HISTORICOSOCIAL" => $objeto->getHistoricoSocial(),
                "PA" => $objeto->getPa(),
                "FR" => $objeto->getFr(),
                "FC" => $objeto->getFc(),
                "TEMPERATURA" => $objeto->getTemperatura(),
                "EXAMESCOMPLEMENTARES" => $objeto->getExamesComplementares()
            );
        }else{
            $this->campos = array();
        }
    }
    
    
    public function getQueixaPrincipal(){
        return $this->queixaPrincipal;
    }

    public function setQueixaPrincipal($queixaPrinc){
        $this->queixaPrincipal = $queixaPrinc;
    }

    public function getHpp(){
        return $this->hpp;
    }

    public function setHpp($HPP){
        $this->hpp = $HPP;
    }

    public function getHda(){
        return $this->hda;
    }

    public function setHda($HDA){
        $this->hda = $HDA;
    }

    public function getHistoricoFamiliar(){
        return $this->historicoFamiliar;
    }

    public function setHistoricoFamiliar($historicoFamil){
        $this->historicoFamiliar = $historicoFamil;
    }

    public function getHistoricoSocial(){
        return $this->historicoSocial;
    }

    public function setHistoricoSocial($historicoSoc){
        $this->historicoSocial = $historicoSoc;
    }

    public function getPa(){
        return $this->pa;
    }

    public function setPa($PA){
        $this->pa = $PA;
    }

    public function getFr(){
        return $this->fr;
    }

    public function setFr($FR){
        $this->fr = $FR;
    }

    public function getFc(){
        return $this->fc;
    }

    public function setFc($FC){
        $this->fc = $FC;
    }

    public function getTemperatura(){
        return $this->temperatura;
    }

    public function setTemperatura($temp){
        $this->temperatura = $temp;
    }

     public function getExamesComplementares(){
        return $this->examesComplementares;
    }

    public function setExamesComplementares($examesComp){
        $this->examesComplementares = $examesComp;
    }
}
?>