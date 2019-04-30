<?php

require 'Dao/daoGenerico.php'; 


abstract class Banco extends daoGenerico{
    
    public $tabela = "";
    public $campos = array();
    public $campopk = null;
    public $valorpk = null;

    public function setValor($campo=null, $valor=null){
        if($campo != null && $valor != null){
            $this->campos[$campo] = $valor;
        }
    }
}


?>