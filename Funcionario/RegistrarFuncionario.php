<?php

header("Content-type: application/json; charset=utf-8");
require '../Funcionario/Funcionario.php';


$func = new Funcionario();

if(isset($_POST['nomeFunc'])){

	$func->setNome($_POST['nomeFunc']);
	$func->setDataNasc(date("Y-d-m",strtotime($_POST['dataNascFunc'])));
	$func->setSexo($_POST['sexoFunc']);
	$func->setCpf($_POST['cpfFunc']);
	$func->setRg($_POST['rgFunc']);

	$senha = $_POST['senhaFunc'];

	$func->setEstadoCivil($_POST['estadoCivilFunc']);
	$func->setEndereco($_POST['enderecoFunc']);
	$func->setBairro($_POST['bairroFunc']);
	$func->setCidade($_POST['cidadeFunc']);

	$func->setTelefone($_POST['telefoneFunc']);
	$func->setFuncao($_POST['funcaoFunc']);

	$func->setLogin($_POST['loginAluno']);
	$func->setSenha(md5($senha));

	$func->setObjeto($func);

	if($func->inserir($func)){

		echo json_encode(array('status' => true));
	}else{

		echo json_encode(array('status' => false));
	}
	
}

?>