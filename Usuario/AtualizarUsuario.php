<?php

include_once '../Usuario/Usuario.php';

if(isset($_POST['nome'])){
   
   $id = addslashes($_POST['id']);
   $nomeUser = addslashes($_POST['nome']);
   $emailUser = addslashes($_POST['login']);
   $senhaUser = addslashes($_POST['senha']);

   $user = new Usuario();

   $user->setValor('NOME',$nomeUser);
   $user->setValor('LOGIN',$emailUser);
   $user->setValor('SENHA',$senhaUser);

   $user->valorpk = $id;

   if($user->atualizar($user)){
   	 echo "<script>alert('ATUALIZADO COM SUCESSO!!'); window.location = '../Telas/ListarUsuario.php';</script>";
   }else{
   	 echo "<script>alert('ERRO AO ATUALIZAR!!');  window.location = '../Telas/ListarUsuario.php';</script>";
   }


}



?>