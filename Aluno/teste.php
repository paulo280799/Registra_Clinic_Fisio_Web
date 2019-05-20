<?php

require 'Aluno.php';

$aluno = new Aluno();

$aluno->setMatricula('10206');
$aluno->setNome('Felipe Sousa');
$aluno->setDataNasc('12/08/1997');

$aluno->setObjeto($aluno);

var_dump($aluno);


?>