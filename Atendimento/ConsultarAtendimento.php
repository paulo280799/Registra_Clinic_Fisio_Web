<?php
header("Content-Type: application/json;charset=UTF-8");

require '../Util/daoGenerico.php';

$dao = new daoGenerico();

if(isset($_POST['tipoAtend'])){

   $tipo = $_POST['tipoAtend'];

   $sql = "SELECT IDATENDIMENTO,TIPOATENDIMENTO FROM ATENDIMENTO WHERE TIPOATENDIMENTO LIKE ?";

   $dao->setCondicao('%'.$tipo.'%');

   $dados = $dao->getDados($sql,true);

   if(!empty($dados)){

   	  echo json_encode(array('status' => true, 'nome' => $dados));
  
   }else{

   	 echo json_encode(array('status' => false, 'nome' => null));

   }
 
}



?>