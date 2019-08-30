<?php
ini_set('session.save_path',realpath(dirname($_SERVER['DOCUMENT_ROOT']) . '/../tmp'));
session_start();

require '../Util/daoGenerico.php';
header("Content-type: application/json; charset=utf-8");


$dao = new daoGenerico();

$requisicao = $_POST;

if(isset($requisicao['login']) && isset($requisicao['senha'])){
    
    $login = $requisicao['login'];
    $senha = md5($requisicao['senha']);
    
    //VERIFICA SE O ACESSO É UM ALUNO
    $sql = 'SELECT * FROM ALUNO WHERE LOGIN = ? AND SENHA = ?';
    
	$dao->setCondicao($login);
    $dao->setCondicao($senha);
    $result = $dao->getDados($sql,false);
    
    if($result){
        
        $_SESSION['SESSION_ID_ALUNO'] = $result->IDALUNO;
	    $_SESSION['SESSION_NOME_ALUNO'] = $result->NOMEALUNO;
		$_SESSION['SESSION_LOGIN_ALUNO'] = $result->LOGIN;
        
        echo json_encode(array('status' => true,'tipo' => 'Aluno'));
        
    }else{
        
        //VERIFICA SE O ACESSO É UM PROFESSOR
         $dao = new daoGenerico();
        
         $sql = 'SELECT * FROM PROFESSOR WHERE LOGIN = ? AND SENHA = ?';
          
         $dao->setCondicao($login);
         $dao->setCondicao($senha);

         $result = $dao->getDados($sql,false);
        
         if($result){
              
            $_SESSION['SESSION_ID_PROF'] = $result->IDPROF;
            $_SESSION['SESSION_NOME_PROF'] = $result->NOMEPROF;
            $_SESSION['SESSION_LOGIN_PROF'] = $result->LOGIN;

            echo json_encode(array('status' => true,'tipo' => 'Prof'));
            
         }else{
             
             //VERIFICA SE O ACESSO É UM FUNCIONÁRIO
             $dao = new daoGenerico();
           
             $sql = 'SELECT * FROM FUNCIONARIO WHERE LOGIN = ? AND SENHA = ?'; 
             
             $dao->setCondicao($login);
             $dao->setCondicao($senha);

             $result = $dao->getDados($sql,false);
             
              if($result){

                $_SESSION['SESSION_ID_FUNC'] = $result->IDFUNC;
                $_SESSION['SESSION_NOME_FUNC'] = $result->NOMEFUNC;
                $_SESSION['SESSION_LOGIN_FUNC'] = $result->LOGIN;

                    echo json_encode(array('status' => true,'tipo' => 'func'));

              }else{
                    //CASO NÃO SEJA NENHUM ACESSO
                    echo json_encode(array('status' => false));
                   
              }   
         } 
    }
}


?>