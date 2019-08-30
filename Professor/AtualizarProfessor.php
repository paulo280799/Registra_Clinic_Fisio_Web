<?php

header("Content-type: application/json; charset=utf-8");
require '../Professor/Professor.php';


$prof = new Professor();

if(isset($_POST['nomeProf'])){

	$idProf = $_POST['idProf'];

	$prof->setNome($_POST['nomeProf']);
	$prof->setDataNasc(date("Y-d-m",strtotime($_POST['dataNascProf'])));
	$prof->setSexo($_POST['sexoProf']);
	$prof->setCpf($_POST['cpfProf']);
	$prof->setRg($_POST['rgProf']);


	$prof->setEstadoCivil($_POST['estadoCivilProf']);
	$prof->setEndereco($_POST['enderecoProf']);
	$prof->setBairro($_POST['bairroProf']);
	$prof->setCidade($_POST['cidadeProf']);
	$prof->setTelefone($_POST['telefoneProf']);
	$prof->setEspecializacao($_POST['especializacaoProf']);

	$prof->setLogin($_POST['loginProf']);
	$prof->setSenha(md5($_POST['senhaProf']));

    //SETANDO ID DO PROFESSOR
	$prof->valorpk = $idProf;

	$prof->setObjeto($prof);

	if($prof->atualizar($prof)){

        echo json_encode(array('status' => true));
		
	}else{

		echo json_encode(array('status' => false));
	}
	
}

?>