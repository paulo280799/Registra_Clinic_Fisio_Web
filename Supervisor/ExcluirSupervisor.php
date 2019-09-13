<?php

header("Content-type: application/json; charset=utf-8");
require '../Supervisor/Supervisor.php';

if(isset($_POST['id'])){

   $id = $_POST['id'];

   $super = new Supervisor();

   $super->valorpk = $id;

   if($super->excluir($super)){
   	echo json_encode(array('status' => true));
   }else{
   	echo json_encode(array('status' => false));
   }

}


?>