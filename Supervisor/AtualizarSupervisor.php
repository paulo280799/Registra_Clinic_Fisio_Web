<?php

header("Content-type: application/json; charset=utf-8");
require '../Supervisor/Supervisor.php';


$prof = new Supervisor();

if(isset($_POST['nomeSuper'])){

	$idProf = $_POST['idSuper'];

	$prof->setNome($_POST['nomeSuper']);
	$prof->setDataNasc(date("Y-d-m",strtotime($_POST['dataNascSuepr'])));
	$prof->setSexo($_POST['sexoSuper']);
	$prof->setCpf($_POST['cpfSuper']);
	$prof->setRg($_POST['rgSuper']);


	$prof->setEstadoCivil($_POST['estadoCivilSuper']);
	$prof->setEndereco($_POST['enderecoSuper']);
	$prof->setBairro($_POST['bairroSuper']);
	$prof->setCidade($_POST['cidadeSuper']);
	$prof->setTelefone($_POST['telefone']);
	$prof->setEspecializacao($_POST['especializacaoProf']);
	$prof->setNaturalidade($_POST['naturalidade']);
	$prof->setOcupacao($_POST['ocupacao']);
	$prof->setProfissao($_POST['profissao']);

	$prof->setLogin($_POST['loginSuper']);
	$prof->setSenha(md5($_POST['senhaSuper']));

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