<?php

header("Content-type: application/json; charset=utf-8");
require '../Paciente/Paciente.php';


$pac = new Paciente();

if(isset($_POST['nomePac'])){

	$idPaciente = $_POST['idPac'];

	$pac->setNome($_POST['nomePac']);
	$pac->setDataNasc(date("Y-d-m",strtotime($_POST['dataNascPac'])));
	$pac->setSexo($_POST['sexoPac']);
	$pac->setCpf($_POST['cpfPac']);
	$pac->setRg($_POST['rgPac']);

	$pac->setEstadoCivil($_POST['estadoCivilPac']);
	$pac->setEndereco($_POST['enderecoPac']);
	$pac->setBairro($_POST['bairroPac']);
	$pac->setCidade($_POST['cidadePac']);
	$pac->setTelefone($_POST['telefonePac']);
	$pac->setprofissao($_POST['profissaoPac']);

	$pac->setNumeroProntuario($_POST['numProntuarioPac']);
	$pac->setPostoDeSaude($_POST['postoSaudePac']);
	$pac->setAgenteDeSaude($_POST['agenteSaudePac']);
	$pac->setPeso($_POST['pesoPac']);
	$pac->setAltura($_POST['alturaPac']);
	$pac->setSituacao($_POST['situacaoPac']);

	$pac->valorpk = $idPaciente;

	$pac->setObjeto($pac);

	if($pac->atualizar($pac)){

		echo json_encode(array('status' => true));
	}else{

		echo json_encode(array('status' => false));
	}
	
}

?>