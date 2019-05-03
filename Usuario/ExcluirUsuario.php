<?php

include_once '../Usuario/Usuario.php';

if(isset($_POST['id'])){

   $id = $_POST['id'];

   $user = new Usuario();

   $user->valorpk = $id;

   if($user->excluir($user)){
   	echo json_encode(array('resposta' => true));
   }else{
   	echo json_encode(array('resposta' => false));
   }

}


?>