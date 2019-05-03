<?php

require_once 'Util/daoGenerico.php';

/**
 *
 * @author Felipe
 */

class Usuario extends daoGenerico {
    
    public function __construct($campos = array()){
        parent::__construct();
        $this->tabela = "USUARIO";

        if (sizeof($campos) <= 0){
            $this->campos = array(
                "NOME" => NULL,
                "LOGIN" => NULL,
                "SENHA" => NULL
            );
        }else{
            $this->campos = $campos;
        }
        
        $this->campopk="IDUSUARIO";
    }
}

?>