<?php

include_once '../Usuario/Usuario.php';

if(isset($_POST['nome'])){
   
   $nomeUser = addslashes($_POST['nome']);
   $emailUser = addslashes($_POST['login']);
   $senhaUser = addslashes($_POST['senha']);

   $user = new Usuario();

   $user->setValor('NOME',$nomeUser);
   $user->setValor('LOGIN',$emailUser);
   $user->setValor('SENHA',$senhaUser);

   if($user->inserir($user)){
   	 echo "<script>alert('USUARIO REGISTRADO COM SUCESSO!!'); window.location = '../Telas/CadastroUsuario.php';</script>";
   }else{
   	 echo "<script>alert('ERRO NA INSERÇÃO DO USUARIO!!')</script>";
   }


}


?>