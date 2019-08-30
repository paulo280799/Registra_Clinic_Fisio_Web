<?php

header("Content-type: application/json; charset=utf-8");
require '../Paciente/Paciente.php';

if(isset($_POST['id'])){

   $id = $_POST['id'];

   $pac = new Paciente();

   $pac->valorpk = $id;

   if($pac->excluir($pac)){

   	echo json_encode(array('status' => true));
   
   }else{

   	echo json_encode(array('status' => false));
   }

}

?>