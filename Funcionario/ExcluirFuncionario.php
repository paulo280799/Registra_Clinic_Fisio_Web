<?php

header("Content-type: application/json; charset=utf-8");
require '../Funcionario/Funcionario.php';

if(isset($_POST['id'])){

   $id = $_POST['id'];

   $func = new Funcionario();

   $func->valorpk = $id;

   if($func->excluir($func)){
   	 echo json_encode(array('status' => true));
   }else{
   	 echo json_encode(array('status' => false));
   }

}


?>