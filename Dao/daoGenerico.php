<?php

class daoGenerico{

	private $con;
	private $user = 'root';
	private $password = '';

	function __construct(){
		$this->con = new PDO("mysql:host=localhost;dbname=fisio",$this->user,$this->password);
	}


    public function inserir($objeto){

       $sql = "INSERT INTO ".$objeto->tabela." (";

       for($i=0; $i<count($objeto->campos); $i++){
           $sql .= key($objeto->campos);
           if($i< (count($objeto->campos)-1)){
               $sql .=", ";
           }else{
               $sql .=") ";
           }
           next($objeto->campos);     
        }
        reset($objeto->campos);

        $sql .= "VALUES (";
        for($i=0; $i<count($objeto->campos); $i++){
           $sql .= '?';
           if($i< (count($objeto->campos)-1)){
               $sql .=", ";
           }else{
               $sql .=") ";
           }
           next($objeto->campos);     
        }
            //echo $sql;
           return $this->executar($sql);
   }

	public function executar($sql){
	   	   return $sql;
	}


}


?>