<?php  
ini_set('session.save_path',realpath(dirname($_SERVER['DOCUMENT_ROOT']) . '/../tmp'));
session_start();

if(isset($_SESSION['SESSION_ID_ALUNO'])){
    $logado = $_SESSION['SESSION_NOME_ALUNO'];
    $id = $_SESSION['SESSION_ID_ALUNO'];
    $tipo = 'Aluno';
}else if(isset($_SESSION['SESSION_ID_PROF'])){
    $logado = $_SESSION['SESSION_NOME_PROF'];
    $id = $_SESSION['SESSION_ID_PROF'];
    $tipo = 'Professor';
}else if(isset($_SESSION['SESSION_ID_FUNC'])){
    $logado = $_SESSION['SESSION_NOME_FUNC'];
    $id = $_SESSION['SESSION_ID_FUNC'];
    $tipo = 'Funcionario';
}else{
    header('location: ../Index.php');
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!-- Required meta tags -->
	<title>Cadastro Usuário</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Abel" rel="stylesheet"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/styleCadastroUsuario.css">
	<link rel="stylesheet"  type="text/css"  href="../css/styleMenu.css">
</head>
<body>

	<?php include_once '../Util/Menu.php'; ?>
	
	 <div class="container">
        <div clas="span10 offset1">
          <div class="card">
	            <div class="card-header">
	                <h3 class="well">Usuário</h3>
	            </div>
              <div class="card-body">
		            <form class="form-horizontal" action="../Usuario/RegistraUsuario.php" method="post">

		                <div class="form-group">
		                   <label class="control-label">Nome:</label>
		                    <div class="controls">
		                      <input size="50" class="form-control" name="nome" type="text" placeholder="..." required>
		                      <input type="hidden" name="id">
		                      <span class="help-inline"><?php?></span>
		                    </div>
		                </div>

		            
		                <div class="form-group">
		                    <label class="control-label">Login:</label>
		                    <div class="controls">
		                        <input size="40" class="form-control" name="login" type="text" placeholder="..." required>
		                        <span class="help-inline"><?php?></span>
		                    </div>
		                </div>

		                <div class="form-group">
		                    <label class="control-label">Senha:</label>
		                    <div class="controls">
		                       <input size="40" class="form-control" name="senha" type="password" placeholder="..." required>
		                       <span class="help-inline"><?php?></span>
		                    </div>
		                </div>
                        
                         <div class="form-group">
		                    <label class="control-label">Tipo:</label>
		                    <div class="controls">
                               <select class="form-control" name="tipo" id="selectTipo">
                                 <option value="">---</option>
                                 <option value="Aluno">Aluno</option>
                                 <option value="Funcionario">Funcionário</option>
                                 <option value="Professor">Professor</option>
                               </select>
		                       <span class="help-inline"><?php?></span>
		                    </div>
		                </div>
		                
		                <div class="form-actions">

		                <button type="submit" class="btn btn-success" id="btnSalvarUsuario">Salvar</button>
		                <a href="../Telas/ListarUsuario.php"><button type="button" class="btn btn-success" id="btnPesquisarUsuario">Pesquisar</button></a>

		                </div>
		            </form>
            </div>
        </div>
        </div>
    </div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
</body>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="text/javascript">
		  $(document).ready(function(e){
		  
		  	var dado = '<?php echo $_GET['id']; ?>';
		  
		  	if(dado != 0){
		  		$('#btnSalvarUsuario').text('Atualizar');
		  		$('.form-horizontal').attr('action','../Usuario/AtualizarUsuario.php');
		  	}
		  });
    </script>
</html>