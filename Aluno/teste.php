<?php

require '../Paciente/Paciente.php';

$pac = new Paciente();

$pac->setNome('Claudia');

$pac->setObjeto($pac);

var_dump($pac);


?>