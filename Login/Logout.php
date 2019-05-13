<?php
ini_set('session.save_path',realpath(dirname($_SERVER['DOCUMENT_ROOT']) . '/../tmp'));
session_start();

if(isset($_GET['id']) && isset($_GET['tipo'])){

if($_GET['tipo'] == 'Aluno'){
    
unset($_SESSION['SESSION_ID_ALUNO']);
unset($_SESSION['SESSION_NOME_ALUNO']);
unset($_SESSION['SESSION_LOGIN_ALUNO']);
session_destroy();
header('Location: ../Index.php'); 
    
}else if($_GET['tipo'] == 'Professor'){
    
unset($_SESSION['SESSION_ID_PROF']);
unset($_SESSION['SESSION_NOME_PROF']);
unset($_SESSION['SESSION_LOGIN_PROF']);
session_destroy();
header('Location: ../Index.php'); 

}else if($_GET['tipo'] == 'Funcionario'){
    
unset($_SESSION['SESSION_ID_FUNC']);
unset($_SESSION['SESSION_NOME_FUNC']);
unset($_SESSION['SESSION_LOGIN_FUNC']);
session_destroy();
header('Location: ../Index.php'); 
    
}

}

?>