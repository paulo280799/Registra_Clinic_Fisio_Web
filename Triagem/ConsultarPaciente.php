<?php
header("Content-Type: application/json;charset=UTF-8");

require '../Util/daoGenerico.php';

$dao = new daoGenerico();

if(isset($_POST['nomePaciente'])){

   $nome = $_POST['nomePaciente'];

   $sql = "SELECT NOMEPAC,IDPACIENTE FROM PACIENTE WHERE NOMEPAC LIKE ?";

   $dao->setCondicao('%'.$nome.'%');

   $dados = $dao->getDados($sql,true);

   if(!empty($dados)){

   	  echo json_encode(array('status' => true, 'nome' => $dados));
  
   }else{

   	 echo json_encode(array('status' => false, 'nome' => null));

   }
 
}



?>