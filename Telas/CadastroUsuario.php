<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css.style.css">

	<title>Registra Clinic Fisio</title>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
			<a class="navbar-brand" href="Index.html">Registra Clinic Fisio</a>
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<li class="nav-item active">
					<a class="nav-link" href="CadastroPaciente.html">Paciente <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="CadastroUsuario.html">Funcionario <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="CadastroAtendimento.html">Atendimento <span class="sr-only">(current)</span></a>
				</li>
			</ul>
		</div>
	</nav>
	
	<div class="container">
		<form action="script.php" method="post">
			<fieldset>
				<legend class="fw" style="text-align: center;">Cadastro de Usuário</legend>
				<div class="form-group">
					<label id="nome" class="fw">Nome:</label>
					<input type="text" name="nome" class="form-control" id="nome" placeholder="Informe seu nome completo">
				</div>

				<div class="form-group">
					<label for="email" class="fw">E-mail:</label>
					<input type="text" name="email" class="form-control" id="email" placeholder="Informe seu E-mail">
				</div>

				<div class="form-group">
					<label style="margin-right: 5px;" class="fw">Sexo:</label>
					<div class="form-group form-check-inline">
						<input type="radio" class="form-check-input" name="sexo" value="M" id="masc">
						<label class="form-check-input" for="masc">Masculino</label>
					</div>
					<div class="form-group form-check-inline">
						<input type="radio" class="form-check-input" name="sexo" value="F" id="femi">
						<label class="form-check-input" for="femi">Feminino</label>
					</div>
				</div>
				<div class="form-group">
					<label for="email" class="fw">Senha:</label>
					<input type="text" name="senha" class="form-control" id="senha" placeholder="Informe sua senha">
				</div>
				<div class="form-group">
					<label for="email" class="fw">Confirmar Senha:</label>
					<input type="text" name="senha" class="form-control" id="senha" placeholder="confirme sua senha">
				</div>
				<button type="submit" value="cadastrar" class="btn btn-outline-success">ENVIAR</button>
				<button type="submit" class="btn btn-outline-success">LIMPAR</button>
			</fieldset>  
		</form> 	
	</div>


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>