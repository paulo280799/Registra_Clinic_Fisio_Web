<?php

header("Content-type: application/json; charset=utf-8");
require '../Aluno/Aluno.php';


$aluno = new Aluno();

if(isset($_POST['nomeAluno'])){

	$aluno->setNome($_POST['nomeAluno']);
	$aluno->setDataNasc(date("Y-m-d",strtotime($_POST['dataNascAluno'])));
	$aluno->setSexo($_POST['sexoAluno']);
	$aluno->setCpf($_POST['cpfAluno']);
	$aluno->setRg($_POST['rgAluno']);

	$senha = $_POST['senhaAluno'];

	$aluno->setEstadoCivil($_POST['estadoCivilAluno']);
	$aluno->setEndereco($_POST['enderecoAluno']);
	$aluno->setBairro($_POST['bairroAluno']);
	$aluno->setCidade($_POST['cidadeAluno']);
	$aluno->setProfissao($_POST['profissaoAluno']);
	$aluno->setTelefone($_POST['telefoneAluno']);
	$aluno->setMatricula($_POST['matriculaAluno']);

	$aluno->setLogin($_POST['loginAluno']);
	$aluno->setSenha(md5($senha));

	$aluno->setObjeto($aluno);

	if($aluno->inserir($aluno)){

		echo json_encode(array('status' => true));
	}else{

		echo json_encode(array('status' => false));
	}
	
}

?>