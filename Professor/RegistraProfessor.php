<?php  
include_once '../Professor/Professor.php';
require '../Banco/ClassConexao.php';

if (isset($_POST['nomeProfessor'])) {

	$nomeProfessor = addslashes($_POST['nomeProfessor']);
	$dataNasc = addslashes($_POST['dataNasc']);
	$sexo = addslashes($_POST['sexo']);
	$rg = addslashes($_POST['rg']);
	$cpf = addslashes($_POST['cpf']);
	$estadoCivil = addslashes($_POST['estadoCivil']);
	$cidade = addslashes($_POST['cidade']);
	$bairro = addslashes($_POST['bairro']);
	$rua = addslashes($_POST['rua']);
	$numCasa = addslashes($_POST['numCasa']);
	$telefone = addslashes($_POST['telefone']);
	$especializacao = addslashes($_POST['especializacao']);

 	if($sexo=='M'){

 	}else{
 		$sexo == 'F';
 	}

 	if ($estadoCivil == 'C') {

 	}else{
 		$estadoCivil == 'S';
 	}

	$prof = new Professor();

	$prof->setNome($nomeProfessor);
	$prof->setDataNasc($dataNasc);
	$prof->setSexo($sexo);
	$prof->setRg($rg);
	$prof->setCpf($cpf);
	$prof->setEstadoCivil($estadoCivil);
	$prof->setEndereco($cidade);
	$prof->setBairro($bairro);
	$prof->setRua($rua);
	$prof->setTelefone($telefone);
	$prof->setEspecializacao($especializacao);

	$prof->setObjeto($prof);



	if($prof->inserir($prof)){

		echo "<script>alert('SALVO COM SUCESSO !!');window.location = '../Telas/CadastroProfessor.php';</script>";
	
	}else{
		echo "<script>alert('ERRO NA INSERÇÃO DO USUARIO!!')</script>";
	}
}
?>