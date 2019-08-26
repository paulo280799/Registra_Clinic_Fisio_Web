<?php

require '../Usuario/Usuario.php';

/**
 *
 * @author Felipe
 */
class Funcionario extends Usuario{
    
    private $Funcao;
    
    
    public function __construct(){ 
        parent::__construct();

        $this->tabela = "FUNCIONARIO";

        $this->campopk = "IDFUNC";
    }
    
    
    function setObjeto($objeto = null){
         if ($objeto != null){
            $this->campos = array(
                /*------ PESSOA -------*/
                "NOMEFUNC" => $objeto->getNome(),
                "DATANASCFUNC" => $objeto->getDataNasc(),
                "SEXOFUNC" => $objeto->getSexo(),
                "RGFUNC" => $objeto->getRg(),
                "CPFFUNC" => $objeto->getCpf(),
                "ESTADOCIVILFUNC" => $objeto->getEstadoCivil(),
                "ENDERECOFUNC" => $objeto->getEndereco(),
                "BAIRROFUNC" => $objeto->getBairro(),
                "CIDADEFUNC" => $objeto->getCidade(),
                "TELEFONEFUNC" => $objeto->getTelefone(),
                /*------- FUNCIONARIO --------*/
                "FUNCAOFUNC" => $objeto->getFuncao(),
                /*------- USUARIO --------*/
                "LOGIN" => $objeto->getLogin(),
                "SENHA" => $objeto->getSenha()
            );
        }else{
            $this->campos = array();
        }
    }
    
    
    function setFuncao($funcao){
        $this->Funcao = $funcao;
    }
    
    function getFuncao(){
        return $this->Funcao;
    }
}

?>