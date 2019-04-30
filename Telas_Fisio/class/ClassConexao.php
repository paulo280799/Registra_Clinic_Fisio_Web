<?php  
	
	class ClassConexao{

		function conectaBD(){
			try {
				$Con = new PDO("mysql:host=localhost;dbname=fisio,root,");
			} catch (PDOExeption $ERRO) {
				return $ERRO->getMessage();
			}
		}
		
	}
?>