<?php

include_once '../Usuario/Usuario.php';

if(isset($_POST['nome'])){
   
   $id = addslashes($_POST['id']);
   $nomeUser = addslashes($_POST['nome']);
   $loginUser = addslashes($_POST['login']);
   $senhaUser = addslashes($_POST['senha']);
   $tipoUser = addslashes($_POST['tipo']);

   $user = new Usuario();

   $user->setNome($nomeUser);
   $user->setLogin($loginUser);
   $user->setSenha(md5($senhaUser));
   $user->setTipo($tipoUser); 
    
   $user->setObjeto($user);

   $user->valorpk = $id;

   if($user->atualizar($user)){
   	 echo "<script>alert('ATUALIZADO COM SUCESSO!!'); window.location = '../Telas/ListarUsuario.php';</script>";
   }else{
   	 echo "<script>alert('ERRO AO ATUALIZAR!!');  window.location = '../Telas/ListarUsuario.php';</script>";
   }


}



?>