<?php  
	
class ClassConexao{

	private static $conexao;
	public static $error;
	private static $user = 'root';
	private static $password = '';

    function __construct(){  		
       $this->conectar(); 	
	} 

	public static function conectar(){
	
		try {
			self::$conexao = new PDO("mysql:host=localhost;dbname=fisio;charset=utf8",self::$user,self::$password);	
			return self::$conexao;

		}catch (PDOException $e){
			self::$error = $e->getMessage();
			return null;

		}
	}

	public static function desconectar(){
		if(self::$conexao != null){
			self::$conexao = null;
		}
	}
		
}

?>