<?php

require '../Pessoa/Pessoa.php';

/**
 *
 * @author Felipe
 */

class Paciente extends Pessoa {
    
    public function __construct($campos = array()){
        parent::__construct();
        $this->tabela = "PACIENTE";

        if (sizeof($campos) <= 0){
            $this->campos = array(
                "NOME" => NULL,
                "LOGIN" => NULL,
                "SENHA" => NULL
            );
        }else{
            $this->campos = $campos;
        }
        
        $this->campopk="IDPACIENTE";
    }
}

?>