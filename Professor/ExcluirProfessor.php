<?php

header("Content-type: application/json; charset=utf-8");
require '../Professor/Professor.php';

if(isset($_POST['id'])){

   $id = $_POST['id'];

   $prof = new Professor();

   $prof->valorpk = $id;

   if($prof->excluir($prof)){
   	echo json_encode(array('status' => true));
   }else{
   	echo json_encode(array('status' => false));
   }

}


?>