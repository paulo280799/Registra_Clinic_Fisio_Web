<?php  
require '../Anamnese/Anamnese.php';
header("Content-type: application/json; charset=utf-8");


if (isset($_POST['queixaPrincipal'])) {

	$queixaPrincipal = addslashes($_POST['queixaPrincipal']);
	$hpp = addslashes($_POST['hpp']);
	$hda = addslashes($_POST['hda']);
	$historicoF = addslashes($_POST['historicoFamiliar']);
	$historicoS = addslashes($_POST['historicoSocial']);
	$pa = addslashes($_POST['pa']);
	$fr = addslashes($_POST['fr']);
	$fc = addslashes($_POST['fc']);
	$temperatura = addslashes($_POST['temperatura']);
	$examesComp = addslashes($_POST['examesComple']);
	

	$anamnese = new Anamnese();

	$anamnese->setQueixaPrincipal($queixaPrincipal);
	$anamnese->setHpp($hpp);
	$anamnese->setHda($hda);
	$anamnese->setHistoricoFamiliar($historicoF);
	$anamnese->setHistoricoSocial($historicoS);
	$anamnese->setPa($pa);
	$anamnese->setFr($fr);
	$anamnese->setFc($fc);
	$anamnese->setTemperatura($temperatura);
	$anamnese->setExamesComplementares($examesComp);

	$anamnese->setObjeto($anamnese);

	if($anamnese->inserir($anamnese)){
		echo json_encode(array('status' => true));
	}else{
		echo json_encode(array('status' => false));
	}
}
?>