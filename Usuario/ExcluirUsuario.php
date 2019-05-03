<?php

include_once '../Usuario/Usuario.php';

if(isset($_GET['id'])){

   $id = $_GET['id'];

   $user = new Usuario();

   $user->valorpk = $id;

   if($user->excluir($user)){
   	 echo "<script>Confirm('DESEJA EXCLUIR O USUARIO SELECIONADO?'){}; window.location = '../Telas/CadastroUsuario.php';</script>";
   }else{
   	 echo "<script>alert('Erro na Inserção!!')</script>";
   }


}


?>