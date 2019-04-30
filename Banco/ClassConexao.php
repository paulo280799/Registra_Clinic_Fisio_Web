<?php  
	
class ClassConexao{

	public $conexao;
	public $error;
	private $user = 'root';
	private $password = '';

    function __construct(){  		
       $this->conectar(); 	
	} 

	function conectar(){
	
			try {
				$con = new PDO("mysql:host=localhost;dbname=fisio",$this->user,$this->password);
				$this->conexao = $con;
				return true;

			}catch (PDOException $e){
				$this->error = $e->getMessage();
				return false;

			}
	}
		
}

?>