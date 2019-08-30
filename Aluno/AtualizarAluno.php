<?php

header("Content-type: application/json; charset=utf-8");
require '../Aluno/Aluno.php';


$aluno = new Aluno();

if(isset($_POST['nomeAluno'])){

	$aluno->setNome(addslashes($_POST['nomeAluno']));
	$aluno->setDataNasc(addslashes(date("Y-m-d",strtotime($_POST['dataNascAluno']))));
	$aluno->setSexo(addslashes($_POST['sexoAluno']));
	$aluno->setCpf(addslashes($_POST['cpfAluno']));
	$aluno->setRg(addslashes($_POST['rgAluno']));

	$aluno->setEstadoCivil(addslashes($_POST['estadoCivilAluno']));
	$aluno->setEndereco(addslashes($_POST['enderecoAluno']));
	$aluno->setBairro(addslashes($_POST['bairroAluno']));
	$aluno->setCidade(addslashes($_POST['cidadeAluno']));
	$aluno->setProfissao(addslashes($_POST['profissaoAluno']));
	$aluno->setTelefone(addslashes($_POST['telefoneAluno']));
	
	$aluno->setMatricula(addslashes($_POST['matriculaAluno']));

	$aluno->setLogin(addslashes($_POST['loginAluno']));
	$aluno->setSenha(md5(addslashes($_POST['senhaAluno'])));

	$aluno->setObjeto($aluno);

	if($aluno->atualizar($aluno)){

		echo json_encode(array('status' => true));
	}else{

		echo json_encode(array('status' => false));
	}
	
}


?>