<?php

class daoGenerico{

  public $tabela;
  public $campos = array();
  public $condicoes = array();
  public $campopk;
  public $valorpk = null;
  public $error = false;
  
  private $pdo;



 function __construct(){
      try{
        $this->pdo = new PDO("mysql:host=localhost;dbname=fisio;charset=utf8",'root','');
      }catch(PDOException $e){
        $this->error = true;
        $this->error($e->getMessage());
      } 
  }


  //FUNÇÃO DE ERROR DETALHADA
  function error($tipoError){
     echo $tipoError;
  }


   function inserir($objeto){
     if($this->error != true){  

         $sql = "INSERT INTO ".$objeto->tabela." (";
         for($i=0; $i<count($objeto->campos); $i++){
             $sql .= key($objeto->campos);
             if($i< (count($objeto->campos)-1)){
                 $sql .=", ";
             }else{
                 $sql .=") ";
             }
             next($objeto->campos);     
          }
          reset($objeto->campos);
          $sql .= "VALUES (";
         for($i=0; $i<count($objeto->campos); $i++){
             $sql .= is_numeric($objeto->campos[key($objeto->campos)]) ? '?' : '?';
             if($i< (count($objeto->campos)-1)){
                 $sql .=", ";
             }else{
                 $sql .=") ";
             }
             next($objeto->campos);     
          }
              //echo $sql;
             return $this->insert($sql);
         }
     }  


     function insert($sql){
        try {   

          //PREPARA A INSTRUÇÃO PARA PDO   
          $stm = $this->pdo->prepare($sql);   
      
          //LOOP PARA PASSAR OS DADOS COMO PARAMETRO  
          $cont = 1;   
           foreach ($this->campos as $valor):   
               $stm->bindValue($cont, $valor);   
               $cont++;   
           endforeach;   
      
          //EXECUTA A INSTRUÇÃO E CAPTURA O RETORNO  
         return $stm->execute();
             
        }catch(PDOException $e){  
           $this->error($e->getMessage());  
           return false;
         }   
     }


     function atualizar($objeto){

           $sql = "UPDATE ".$objeto->tabela." SET ";
       for($i=0; $i<count($objeto->campos); $i++){
           $sql .= key($objeto->campos)." = ";
           $sql .= is_numeric($objeto->campos[key($objeto->campos)]) ? '?' : '?';
           if($i< (count($objeto->campos)-1)){
               $sql .=", ";
           }else{
               $sql .=" ";
           }
           next($objeto->campos);     
        }
        $sql .= "WHERE ".$objeto->campopk." = ";
        $sql .= is_numeric($objeto->valorpk) ? '?' : '?';
        
           return $this->update($sql);
      
     }


     function update($sql){   
        try {   
      
          //PREPARAR INSTRUÇÃO PARA PDO  
          $stm = $this->pdo->prepare($sql);   
      
          //LOOP PARA PASSAR OS DADOS POR PARAMETRO  
          $cont = 1;   
          foreach ($this->campos as $valor):   
              $stm->bindValue($cont, $valor);   
              $cont++;   
          endforeach;   
                
          //PASSANDO CONDICAO DA CLAUSULA WHERE   
          $stm->bindValue($cont, $this->valorpk);   
      
          //EXECUTA A INSTRUÇÃO E CAPTURA O RETORNO   
          return $stm->execute();   
            
        } catch (PDOException $e){   
           $this->error($e->getMessage());     
        }   
     }  


    public function excluir($objeto){
      if($this->error != true){  
          $sql = "DELETE FROM ".$objeto->tabela;           
          $sql .= " WHERE ".$objeto->campopk." = ";
          $sql .= is_numeric($objeto->valorpk) ? '?' : '?';
           
          return $this->delete($sql);
       }
    }


    public function delete($sql){   
        try {   
      
          //PREPARAR INSTRUÇÃO PARA PDO    
          $stm = $this->pdo->prepare($sql);   
      
          //PASSANDO CONDICAO DA CLAUSULA WHERE  
          $cont = 1;   
          $stm->bindValue($cont, $this->valorpk);   
    
          //EXECUTA A INSTRUÇÃO E CAPTURA O RETORNO   
          return $stm->execute();  
             
        } catch (PDOException $e) {   
          echo "Erro: " . $e->getMessage();   
        }   
    } 



    public function getDados($sql,$fetchAll){
     if($this->error != true){    
        try {   
      
          //PREPARAR INSTRUÇÃO PARA PDO    
          $stm = $this->pdo->prepare($sql);   
      
          //VERIFICA A EXISTENCIA DE CONDICOES   
          if (!empty($this->condicoes)):   
      
          //PASSANDO CONDICAO DA CLAUSULA WHERE  
          $cont = 1;   
          foreach ($this->condicoes as $valor):   
              $stm->bindValue($cont, $valor);   
              $cont++;   
          endforeach;   
          
          endif;   
    
          //EXECUTA A INSTRUÇÃO   
          if($stm->execute()){
              //RETORNA QUANTIDADE DE LINHAS ENCONTRADAS NO BANCO 
              if($fetchAll):   
                $dados = $stm->fetchAll(PDO::FETCH_OBJ);   
              else:  
                $dados = $stm->fetch(PDO::FETCH_OBJ);   
              endif;  

                if(!empty($dados)){
                  return $dados;
                }else{
                  return null;
                }
               
          }else{
              return null;
          }
      
        }catch (PDOException $e) {   
          echo "Erro: " . $e->getMessage();   
        }
      }   
   }  


     // SETANDO NOMES DE CAMPOS NO ARRAY
     function setValor($campo = null,$valor = null){
      if($campo != null && $valor != null){
            $this->campos[$campo] = $valor;
        }
     }

     // SETANDO CONDICOES WHERE NO ARRAY
     function setCondicao($valor = null){
      if($valor != null){
            array_push($this->condicoes,$valor);
        }
     }
}

?>