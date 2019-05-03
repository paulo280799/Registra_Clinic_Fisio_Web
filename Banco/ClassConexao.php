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
			$this->conexao = new PDO("mysql:host=localhost;dbname=fisio;charset=utf8",$this->user,$this->password);	
			return true;

		}catch (PDOException $e){
				$this->error = $e->getMessage();
				return false;

		}
	}
		
}

?>