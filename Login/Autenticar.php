<?php
ini_set('session.save_path',realpath(dirname($_SERVER['DOCUMENT_ROOT']) . '/../tmp'));
session_start();

header('Content-Type: aplication/json; charset=utf-8');
require '../Util/daoGenerico.php';


$dao = new daoGenerico();

$requisicao = $_POST;

if(isset($requisicao['usuario'])){
    
    $login = $requisicao['login'];
    $senha = $requisicao['senha'];
    $user = $requisicao['usuario'];
    
    if($user == 'Aluno'){
        $sql = 'SELECT * FROM ALUNO WHERE LOGINALUNO = ? AND SENHAALUNO = ?';
        
        $dao->setCondicao($login);
        $dao->setCondicao($senha);
        
        $result = $dao->getDados($sql,false);
        
        if($result != false){
            
        $_SESSION['SESSION_ID_ALUNO'] = $result->IDALUNO;
	    $_SESSION['SESSION_NOME_ALUNO'] = $result->NOMEALUNO;
		$_SESSION['SESSION_LOGIN_ALUNO'] = $result->LOGINALUNO;
            
            echo json_encode(array('status' => true));
            
        }else{
            echo json_encode(array('status' => false));
        }
        
             
    }else{
        
        if($user == 'Professor'){
            
            
                $sql = 'SELECT * FROM PROFESSOR WHERE LOGINPROF = ? AND SENHAPROF = ?';

                $dao->setCondicao($login);
                $dao->setCondicao($senha);

                $result = $dao->getDados($sql,false);

                if($result != false){

                $_SESSION['SESSION_ID_PROF'] = $result->IDPROF;
                $_SESSION['SESSION_NOME_PROF'] = $result->NOMEPROF;
                $_SESSION['SESSION_LOGIN_PROF'] = $result->LOGINPROF;

                    echo json_encode(array('status' => true));

                }else{

                    echo json_encode(array('status' => false));
                }        
            
        }else{
            
             if($user == 'Funcionario'){
            
                $sql = 'SELECT * FROM FUNCIONARIO WHERE LOGINFUNC = ? AND SENHAFUNC = ?';

                $dao->setCondicao($login);
                $dao->setCondicao($senha);

                $result = $dao->getDados($sql,false);

                if($result != false){

                $_SESSION['SESSION_ID_FUNC'] = $result->IDFUNC;
                $_SESSION['SESSION_NOME_FUNC'] = $result->NOMEFUNC;
                $_SESSION['SESSION_LOGIN_FUNC'] = $result->LOGINFUNC;

                    echo json_encode(array('status' => true));

                }else{

                    echo json_encode(array('status' => false));
                }        
            
            }       
            
        }
            
    }
	
    
}


?>