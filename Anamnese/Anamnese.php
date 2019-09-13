<?php

/**
 *
 * @author Fernando
 */

class Anamnese extends daoGenerico{
    
    private $QueixaPrincipal;
    private $Hpp;
    private $Hda;
    private $HistoriaFamiliar;
    private $HistoriaSocial;
    private $Pa;
    private $Fr;
    private $Fc;
    private $Temperatura;
    private $ExamesComplementares;
    
    public function __construct(){
       
        parent::__construct();
        $this->tabela = "anamnese";
        
        $this->campopk = "IDANAMNESE";
    }
    
       
    function setObjeto($objeto = null){
         if ($objeto != null){
            $this->campos = array(
     
                "QUEIXAPRINCIPAL" => $objeto->getQueixaPrincipal(),
                "HPP" => $objeto->getHpp(),
                "HDA" => $objeto->getHda(),
                "HISTORIAFAMILIAR" => $objeto->getHistoriaFamiliar(),
                "HISTORIASOCIAL" => $objeto->getHistoriaSocial(),
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
        return $this->QueixaPrincipal;
    }

    public function setQueixaPrincipal($QueixaPrincipal){
        $this->QueixaPrincipal = $QueixaPrincipal;
    }

    public function getHpp(){
        return $this->Hpp;
    }

    public function setHpp($Hpp){
        $this->Hpp = $Hpp;
    }

    public function getHda(){
        return $this->Hda;
    }

    public function setHda($Hda){
        $this->Hda = $Hda;
    }

    public function getHistoriaFamiliar(){
        return $this->HistoriaFamiliar;
    }

    public function setHistoriaFamiliar($HistoriaFamiliar){
        $this->HistoriaFamiliar = $HistoriaFamiliar;
    }

    public function getHistoriaSocial(){
        return $this->HistoriaSocial;
    }

    public function setHistoriaSocial($HistoriaSocial){
        $this->HistoriaSocial = $HistoriaSocial;
    }

    public function getPa(){
        return $this->Pa;
    }

    public function setPa($Pa){
        $this->Pa = $Pa;
    }

    public function getFr(){
        return $this->Fr;
    }

    public function setFr($Fr){
        $this->Fr = $Fr;
    }

    public function getFc(){
        return $this->Fc;
    }

    public function setFc($Fc){
        $this->Fc = $Fc;
    }

    public function getTemperatura(){
        return $this->Temperatura;
    }

    public function setTemperatura($Temperatura){
        $this->Temperatura = $Temperatura;
    }

     public function getExamesComplementares(){
        return $this->ExamesComplementares;
    }

    public function setExamesComplementares($ExamesComplementares){
        $this->ExamesComplementares = $ExamesComplementares;
    }
}
?>