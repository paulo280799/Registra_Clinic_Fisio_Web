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

/*$id = null;

if(isset($_GET['id'])){
    $id = $_GET['id'];
}*/

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!-- Required meta tags -->
	<title>Aluno</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Abel" rel="stylesheet"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/styleCadastroAluno.css">
	<link rel="stylesheet"  type="text/css"  href="../css/styleMenu.css">
</head>
<body>

	<?php include_once '../Util/Menu.php'; ?>

	<div class="alert alert-success" id="alert" role="alert" 
	style="text-align:center;margin: 0 auto;display:none;width: 300px;position: absolute;padding: 10px;z-index: 10;"></div> 
	
	<div class="container">
		<div class="span10 offset1">
			<div class="card">
			    <div class="header">
	                <h3 class="well"><i class="fas fa-user-graduate"></i>Cadastro Aluno</h3>
	            </div>
				<div class="card-body">
					<form class="form" action="../Aluno/RegistraAluno.php">

					 <div class="group-bloco-1" style="">

		              <div class="bloco">
		              	
		            
						<div class="form-group">
							<div class="controls">
								<input size="50" class="campo" name="nomeAluno" type="text" autocomplete="off" required>
								<label class="control-label">Nome Completo</label>
								<i class="fas fa-info-circle infoNome" id="icon-info" data-toggle="popover" data-placement="left" 
								data-content="Ola mundo"></i>
								<span class="help-inline"><?php?></span>
								<input type="hidden" name="id">
							</div>
						</div>

					  </div>

					  <div class="bloco">

						<div class="form-group">
							<div class="controls">
								<input size="40" class="campo" id="dataNasc" name="dataNascAluno" type="text" autocomplete="off" required>
								<label class="control-label">Data Nascimento</label>
								<i class="fas fa-info-circle infoDataNasc" id="icon-info" data-toggle="popover" data-placement="left" 
								data-content="Ola mundo"></i>
								<span class="help-inline"><?php?></span>
							</div>
						</div>

					  </div>
					  <div class="bloco">	

						<div class="form-group">
							<div class="controls">
								<select class="campo" name="sexoAluno" required>
									<option value=""></option>
									<option value="Solteiro">Masculino</option>
									<option value="Casado">Feminino</option>
								</select>
								<label class="control-label">Sexo:</label>
								<i class="fas fa-info-circle" id="icon-info"></i>
								<span class="help-inline"><?php?></span>
							</div>
						</div>

					  </div>

					</div>
				    <div class="group-bloco-2" style="text-align: center;">

						<div class="bloco">	

							<div class="form-group">
								<div class="controls">
									<input size="40" class="campo" id="cpf" name="cpfAluno" type="text" autocomplete="off" required>
									<label class="control-label">CPF</label>
									<i class="fas fa-info-circle" id="icon-info" data-toggle="popover" data-placement="left" 
									data-content="Ola mundo"></i>
									<span class="help-inline"><?php?></span>
								</div>
							</div>

						</div>	
						<div class="bloco">

							<div class="form-group">
								<div class="controls">
									<input size="40" class="campo" name="rgAluno" type="text" autocomplete="off" required>
									<label class="control-label">RG</label>
									<i class="fas fa-info-circle" id="icon-info" data-toggle="popover" data-placement="left" 
									data-content="Ola mundo"></i>
									<span class="help-inline"><?php?></span>
								</div>
							</div>

						</div>
					</div>	 

					<div class="group-bloco-3">

					    <div class="bloco">

							<div class="form-group">
								
								<div class="controls">
									<input size="40" class="campo" name="enderecoAluno" type="text" autocomplete="off" required>
									<label class="control-label">Endereço:</label>
									<i class="fas fa-info-circle" id="icon-info"></i>
									<span class="help-inline"><?php?></span>
								</div>
							</div>

					    </div>
					    <div class="bloco">


							<div class="form-group">
							
								<div class="controls">
									<input size="40" class="campo" name="bairroAluno" type="text" autocomplete="off" required>
									<label class="control-label">Bairro:</label>
									<i class="fas fa-info-circle" id="icon-info"></i>
									<span class="help-inline"><?php?></span>
								</div>
							</div>

						</div>
						<div class="bloco">	

							<div class="form-group" style="width: 50%;">
								
								<div class="controls">
									<input size="40" class="campo" name="cidadeAluno" type="text" autocomplete="off" required>
									<label class="control-label">Cidade:</label>
									<i class="fas fa-info-circle" id="icon-info"></i>
									<span class="help-inline"><?php?></span>
								</div>
							</div>
					    </div>

		             </div>	

		                	<div class="form-group">
								<div class="controls">
									<select class="campo" name="estadoCivilAluno" required>
										<option value=""></option>
										<option value="Solteiro">Solteiro</option>
										<option value="Casado">Casado</option>
										<option value="Divorciado">Divorciado</option>
										<option value="Viuvo">Viúvo</option>
									</select>
									<label class="control-label">Estado Civil:</label>
									<i class="fas fa-info-circle" id="icon-info"></i>
									<span class="help-inline"><?php?></span>
								</div>
							</div>

						<div class="form-group">
							
							<div class="controls">
								<input size="40" class="campo" name="profissaoAluno" type="text" autocomplete="off" required>
								<label class="control-label">Profissão:</label>
								<i class="fas fa-info-circle" id="icon-info"></i>
								<span class="help-inline"><?php?></span>
							</div>
						</div>

		             <div class="bloco" style="margin-top: 0; transform: translateY(-60px);">
				
						<div class="form-group">
					
							<div class="controls">
								<input size="40" class="campo" id="telefone" name="telefoneAluno" type="text" autocomplete="off" required>
								<label class="control-label">Telefone:</label>
								<i class="fas fa-info-circle" id="icon-info"></i>
								<span class="help-inline"><?php?></span>
							</div>
						</div>

						<div class="form-group">
							<div class="controls">
							   <input size="10" class="campo" id="matricula" name="matriculaAluno" type="text" autocomplete="off" required>
							   <label class="control-label">Matricula:</label>
							   <i class="fas fa-info-circle" id="icon-info"></i>
							   <span class="help-inline"><?php?></span>
							</div>
						</div>

						<div class="form-group">
							
							<div class="controls">
								<input size="10" class="campo" name="loginAluno" type="text" autocomplete="off" required>
								<label class="control-label">Login:</label>
								<i class="fas fa-info-circle" id="icon-info"></i>
								<span class="help-inline"><?php?></span>
							</div>
						</div>

						<div class="form-group">
						
							<div class="controls">
								<input size="10" class="campo" name="senhaAluno" type="password" placeholder="..." required>
								<label class="control-label">Senha:</label>
								<i class="fas fa-info-circle" id="icon-info"></i>
								<span class="help-inline"><?php?></span>
							</div>
						</div>

				     </div>

						<div class="form-actions">

							<button type="button" class="btn btn-success" id="btnSalvarAluno">Salvar</button>
							<a href="../Telas/ListarAlunos.php"><button type="button" class="btn btn-success" id="btnPesquisarAluno">Pesquisar</button></a>

						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
</body>

<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../bootstrap-4.3.1/js/bootstrap.min.js"></script>
<script src="../bootstrap-4.3.1/js/bootstrap.js"></script>
<script src="../bootstrap-4.3.1/js/bootstrap.bundle.js"></script>
<script src="../bootstrap-4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="../js/jquerymask.js"></script>

<script type="text/javascript">
	
	$(document).ready(function(e){

		

		var tipo = "<?php echo $tipo;?>";

		/*if(idAtualizar != 0){
			$('#btnSalvarAluno').text('Atualizar');
			$('.form-horizontal').attr('action','../Aluno/AtualizarAluno.php');
		}	*/

		     /*	if(dado != 0){
		  		$('#btnSalvarUsuario').text('Atualizar');
		  		$('.form-horizontal').attr('action','../Usuario/AtualizarUsuario.php');
		  	}*/


		  	switch(tipo){
		  		case "Professor":
		  		$('#cadPaciente,#cadProfessor,#cadFuncionario').css('display','none');
		  		break;

		  		case "Aluno":
		  		$('#cadAluno,#cadProfessor,#cadFuncionario').css('display','none');
		  		break;

		  		case "Funcionario":
		  		$('#cadAluno,#cadPaciente,#cadFuncionario').css('display','none');
		  		break;

		  		default:
		  	}

	});
</script>
<script type="text/javascript">

			$('#btnSalvarAluno').on('click',function(e){

				var dados = $('.form-horizontal').serialize();
				var action = $('.form-horizontal').attr('action');

				$.ajax({
					url: action,
					datatype: 'JSON',
					type: 'POST',
					data: dados,
					success: function(response){

						if(response.status){
						 	console.log(e);
						 	 $('#alert').fadeIn(1000);
						 	 $('#alert').html('Realizado com Sucesso!');

						 	   window.setTimeout(function(){
                                    $('#alert').fadeOut(900); 
                               },3000);

                            
						     $('.form-horizontal')[0].reset();
						}
						

					},error: function(e){

					}
				});

			});


		// MÁSCARA DOS CAMPOS
		$('#telefone').mask('(00) 0.0000-0000');
		$('#cpf').mask('000.000.000-00');
		$('#dataNasc').mask('00/00/0000');
		$('#matricula').mask('0000');
		//---------------------------------------


		function verificaCampos(){

			var quantidade = $('.form-horizontal')[0].childElementCount;

			for (var i = 0; i < quantidade; i++) {

				 var campo = $('.form-horizontal')[0][i];

				 if($(campo).val() == ""){
				 	var pai = $(campo).parents()[0];

				 	var info = $(campo).offsetParent()[0].children[2];

				 	$(info).popover('show');

				 	$(campo).css('border-bottom','1px solid red');
				 }
			}
		}
</script>
</html>