<?php

header("Content-Type: application/json;charset=UTF-8");
require '../Triagem/Triagem.php';

$triagem = new Triagem();

if(isset($_POST['idPacTriagem'])){
  
  $triagem->setPrioridade($_POST['prioridadeTriagem']);
  $triagem->setAtendimento($_POST['idAtendTriagem']);
  $triagem->setPaciente($_POST['idPacTriagem']);

  $data = date('Y-m-d');

  $triagem->setDataTriagem($data);

  $triagem->setObjeto($triagem);

  if($triagem->inserir($triagem)){
  		echo json_encode(array('status' => true));
  }else{
  	   echo json_encode(array('status' => false));
  }

}



?>