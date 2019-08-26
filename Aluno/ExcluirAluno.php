<?php

header("Content-type: application/json; charset=utf-8");
require '../Aluno/Aluno.php';

if(isset($_POST['id'])){

   $id = $_POST['id'];

   $aluno = new Aluno();

   $aluno->valorpk = $id;

   if($aluno->excluir($aluno)){
   	echo json_encode(array('status' => true));
   }else{
   	echo json_encode(array('status' => false));
   }

}


?>