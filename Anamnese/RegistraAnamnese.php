<?php  
require '../Util/daoGenerico.php';
include_once '../Anamnese/Anamnese.php';
require '../Banco/ClassConexao.php';

if (isset($_POST['queixaPrincipal'])) {

	$queixaPrincipal = addslashes($_POST['queixaPrincipal']);
	$hpp = addslashes($_POST['hpp']);
	$hda = addslashes($_POST['hda']);
	$historiaF = addslashes($_POST['historiaF']);
	$historiaS = addslashes($_POST['historiaS']);
	$pa = addslashes($_POST['pa']);
	$fr = addslashes($_POST['fr']);
	$fc = addslashes($_POST['fc']);
	$temperatura = addslashes($_POST['temperatura']);
	$exames = addslashes($_POST['exames']);
	

	$anamnese = new Anamnese();

	$anamnese->setQueixaPrincipal($queixaPrincipal);
	$anamnese->setHpp($hpp);
	$anamnese->setHda($hda);
	$anamnese->setHistoriaFamiliar($historiaF);
	$anamnese->setHistoriaSocial($historiaS);
	$anamnese->setPa($pa);
	$anamnese->setFr($fr);
	$anamnese->setFc($fc);
	$anamnese->setTemperatura($temperatura);
	$anamnese->setExamesComplementares($exames);

	$anamnese->setObjeto($anamnese);



	if($anamnese->inserir($anamnese)){

		echo "<script>alert('SALVO COM SUCESSO !!');window.location = '../Telas/CadastroAnamnese.php';</script>";
	
	}else{
		echo "<script>alert('ERRO NA INSERÇÃO DO USUARIO!!')</script>";
	}
}
?>