<?php

include_once '../Usuario/Usuario.php';

if(isset($_POST['nome'])){
   
   $nomeUser = addslashes($_POST['nome']);
   $loginlUser = addslashes($_POST['login']);
   $senhaUser = addslashes($_POST['senha']);
   $tipoUser = addslashes($_POST['tipo']);

   $user = new Usuario();

   $user->setNome($nomeUser);
   $user->setLogin($loginlUser);
   $user->setSenha(md5($senhaUser));
   $user->setTipo($tipoUser);
   
   $user->setObjeto($user);

   if($user->inserir($user)){
   	 echo "<script>alert('USUARIO REGISTRADO COM SUCESSO!!'); window.location = '../Telas/CadastroUsuario.php';</script>";
   }else{
   	 echo "<script>alert('ERRO NA INSERÇÃO DO USUARIO!!')</script>";
   }


}


?>