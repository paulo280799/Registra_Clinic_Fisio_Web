<?php

include_once '../Util/daoGenerico.php';

$dados = null;

if(isset($_GET['id'])){
    
    $id = $_GET['id'];
    $dao = new daoGenerico();
    $sql = 'SELECT * FROM USUARIO WHERE IDUSUARIO = ?';
    $dao->setCondicao($id);

    $dados = $dao->getDados($sql,false);
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!-- Required meta tags -->
	<title>Cadastro Usuário</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/styleCadastroUsuario.css">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
			<a class="navbar-brand" href="Index.php">Registra Clinic Fisio</a>
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<li class="nav-item active">
					<a class="nav-link" href="../Telas/CadastroPaciente.php">Paciente<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="../Telas/CadastroUsuario.php">Usuário<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="CadastroAtendimento.html">Atendimento<span class="sr-only">(current)</span></a>
				</li>
			</ul>
		</div>
	</nav>
	
	 <div class="container">
        <div clas="span10 offset1">
          <div class="card">
	            <div class="card-header">
	                <h3 class="well"> Cadastro Usuário</h3>
	            </div>
              <div class="card-body">
		            <form class="form-horizontal" action="../Usuario/RegistraUsuario.php" method="post">

		                <div class="form-group">
		                   <label class="control-label">Nome:</label>
		                    <div class="controls">
		                      <input size="50" class="form-control" name="nome" type="text" placeholder="..." value="<?php if($dados != null){ echo $dados->NOME; }else{ ''; } ?>" required>
		                      <input type="hidden" name="id" value="<?php if($dados != null){ echo $dados->IDUSUARIO; }else{ ''; } ?>">
		                      <span class="help-inline"><?php?></span>
		                    </div>
		                </div>

		            
		                <div class="form-group">
		                    <label class="control-label">Login:</label>
		                    <div class="controls">
		                        <input size="40" class="form-control" name="login" type="text" placeholder="..." value="<?php if($dados != null){ echo $dados->LOGIN; }else{ ''; } ?>" required>
		                        <span class="help-inline"><?php?></span>
		                    </div>
		                </div>

		                <div class="form-group">
		                    <label class="control-label">Senha:</label>
		                    <div class="controls">
		                       <input size="40" class="form-control" name="senha" type="password" placeholder="..."  value="<?php if($dados != null){ echo $dados->SENHA; }else{ ''; } ?>" required>
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
		  $(document).ready(function(){
		  
		  	var dado = '<?php echo $_GET['id']; ?>';
		  
		  	if(dado != 0){
		  		$('#btnSalvarUsuario').text('Atualizar');
		  		$('.form-horizontal').attr('action','../Usuario/AtualizarUsuario.php');
		  	}
		  });
    </script>
</html>