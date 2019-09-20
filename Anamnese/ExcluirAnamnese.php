<?php

header("Content-type: application/json; charset=utf-8");
require '../Anamnese/Anamnese.php';

if(isset($_POST['id'])){

   $id = $_POST['id'];

   $anam = new Anamnese();

   $anam->valorpk = $id;

   if($anam->excluir($anam)){
   	echo json_encode(array('status' => true));
   }else{
   	echo json_encode(array('status' => false));
   }

}


?>