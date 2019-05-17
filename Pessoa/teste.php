<?php

require '../Pessoa/Pessoa.php';
require '../Usuario/Usuario.php';

$user = new Usuario();

$user->setNome('Felipe Sousa');
$user->setLogin('fe@gmail');
$user->setSenha('544445');

$user->campos['NOME'] = $user->getNome();
$user->campos['LOGIN'] = $user->getLogin();
$user->campos['SENHA'] = $user->getSenha();

    
var_dump($user->campos);
?>