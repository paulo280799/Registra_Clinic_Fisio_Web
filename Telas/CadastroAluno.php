<?php  
ini_set('session.save_path',realpath(dirname($_SERVER['DOCUMENT_ROOT']) . '/../tmp'));
session_start();
require '../Util/daoGenerico.php';

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

$IdAtualizar = 0;

if(isset($_GET['id'])){

     $IdAtualizar = $_GET['id'];

     $dao = new daoGenerico();
     $sql = 'SELECT * FROM ALUNO WHERE IDALUNO = ?';
     $dao->setCondicao($IdAtualizar);
     $dados = $dao->getDados($sql,false);
}

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
	style="text-align:center;margin: 0 auto;display:none;width: 300px;position: absolute;padding: 10px;z-index: 1000;"></div> 
	
	<div class="container">
		<div class="span10 offset1">
			<div class="card">
			    <div class="header">
	                <h3 class="well"><i class="fas fa-user-graduate"></i>Cadastro Aluno</h3>
	            </div>
				<div class="card-body">
					<form class="form-horizontal">

					 <div class="group-bloco">

		              <div class="bloco">
		              	        
						<div class="form-group">
							<div class="controls">
								<input size="50" class="campo" name="nomeAluno" type="text" autocomplete="off" value="<?php isset($_GET['id']) ? print($dados->NOMEALUNO) : print(""); ?>" required>
								<label class="control-label">Nome Completo</label>
								<i class="fas fa-info-circle infoNome" id="icon-info" data-toggle="popover" data-placement="left" 
								data-content="Ola mundo"></i>
								<span class="help-inline"><?php?></span>
								<input type="hidden" name="idAluno" value="<?php isset($_GET['id']) ? print($dados->IDALUNO) : print(""); ?>">
							</div>
						</div>

					  </div>

					  <div class="bloco">

						<div class="form-group">
							<div class="controls">
								<input size="40" class="campo" id="dataNasc" name="dataNascAluno" type="text" value="<?php isset($_GET['id']) ? print($dados->DATANASCALUNO) : print(""); ?>" autocomplete="off" required>
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
									<option value="Masculino">Masculino</option>
									<option value="Feminino">Feminino</option>
								</select>
								<label class="control-label">Sexo:</label>
								<i class="fas fa-info-circle" id="icon-info"></i>
								<span class="help-inline"><?php?></span>
							</div>
						</div>

					  </div>

					</div>
				    <div class="group-bloco" style="text-align: center;">

						<div class="bloco">	

							<div class="form-group">
								<div class="controls">
									<input size="40" class="campo" id="cpf" name="cpfAluno" type="text" value="<?php isset($_GET['id']) ? print($dados->CPFALUNO) : print(""); ?>" autocomplete="off" required>
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
									<input size="40" class="campo" name="rgAluno" type="text" value="<?php isset($_GET['id']) ? print($dados->RGALUNO) : print(""); ?>" autocomplete="off" required>
									<label class="control-label">RG</label>
									<i class="fas fa-info-circle" id="icon-info" data-toggle="popover" data-placement="left" 
									data-content="Ola mundo"></i>
									<span class="help-inline"><?php?></span>
								</div>
							</div>

						</div>
					</div>	 

					<div class="group-bloco">

					    <div class="bloco">

							<div class="form-group">
								
								<div class="controls">
									<input size="40" class="campo" name="enderecoAluno" type="text" value="<?php isset($_GET['id']) ? print($dados->ENDERECOALUNO) : print(""); ?>" autocomplete="off" required>
									<label class="control-label">Endereço:</label>
									<i class="fas fa-info-circle" id="icon-info"></i>
									<span class="help-inline"><?php?></span>
								</div>
							</div>

					    </div>
					    <div class="bloco">


							<div class="form-group">
							
								<div class="controls">
									<input size="40" class="campo" name="bairroAluno" type="text" value="<?php isset($_GET['id']) ? print($dados->BAIRROALUNO) : print(""); ?>" autocomplete="off" required>
									<label class="control-label">Bairro:</label>
									<i class="fas fa-info-circle" id="icon-info"></i>
									<span class="help-inline"><?php?></span>
								</div>
							</div>

						</div>
						<div class="bloco">	

							<div class="form-group">
								
								<div class="controls">
									<input size="40" class="campo" name="cidadeAluno" type="text" value="<?php isset($_GET['id']) ? print($dados->CIDADEALUNO) : print(""); ?>" autocomplete="off" required>
									<label class="control-label">Cidade:</label>
									<i class="fas fa-info-circle" id="icon-info"></i>
									<span class="help-inline"><?php?></span>
								</div>
							</div>
					    </div>

		             </div>	

		             <div class="group-bloco">
		             	
		             	<div class="bloco">
		                	
		                	<div class="form-group">
								<div class="controls">
									<select class="campo" name="estadoCivilAluno" required>
										<option value=""></option>
										<option value="Solteiro">Solteiro(a)</option>
										<option value="Casado">Casado(a)</option>
										<option value="Divorciado">Divorciado(a)</option>
										<option value="Viuvo">Viúvo(a)</option>
									</select>
									<label class="control-label">Estado Civil:</label>
									<i class="fas fa-info-circle" id="icon-info"></i>
									<span class="help-inline"><?php?></span>
								</div>
							</div>
						</div>	
					 <div class="bloco">

						<div class="form-group">
							
							<div class="controls">
								<input size="40" class="campo" name="profissaoAluno" type="text" value="<?php isset($_GET['id']) ? print($dados->PROFISSAOALUNO) : print(""); ?>" autocomplete="off" required>
								<label class="control-label">Profissão:</label>
								<i class="fas fa-info-circle" id="icon-info"></i>
								<span class="help-inline"><?php?></span>
							</div>
						</div>

					 </div>
					 <div class="bloco">
				

						<div class="form-group">
					
							<div class="controls"> 
								<input size="40" class="campo" id="telefone" name="telefoneAluno" type="text" value="<?php isset($_GET['id']) ? print($dados->TELEFONEALUNO) : print(""); ?>" autocomplete="off" required>
								<label class="control-label">Telefone:</label>
								<i class="fas fa-info-circle" id="icon-info"></i>
								<span class="help-inline"><?php?></span>
							</div>
						</div>

					 </div>	

					</div>
					<div class="group-bloco">
	
                      <div class="bloco">

						<div class="form-group">
							<div class="controls">
							   <input size="10" class="campo" id="matricula" name="matriculaAluno" type="text"  value="<?php isset($_GET['id']) ? print($dados->MATRICULAALUNO) : print(""); ?>" autocomplete="off" required>
							   <label class="control-label">Matricula:</label>
							   <i class="fas fa-info-circle" id="icon-info"></i>
							   <span class="help-inline"><?php?></span>
							</div>
						</div>

					   </div>
					   <div class="bloco">

							<div class="form-group">
								
								<div class="controls">
									<input size="10" class="campo" name="loginAluno" type="text" value="<?php isset($_GET['id']) ? print($dados->LOGIN) : print(""); ?>" autocomplete="off" required>
									<label class="control-label">Login:</label>
									<i class="fas fa-info-circle" id="icon-info"></i>
									<span class="help-inline"><?php?></span>
								</div>
							</div>
					    </div>
					    <div class="bloco">

							<div class="form-group">
							
								<div class="controls">
									<input size="10" class="campo" name="senhaAluno" type="password" value="<?php isset($_GET['id']) ? print($dados->SENHA) : print(""); ?>" autocomplete="off" required>
									<label class="control-label">Senha:</label>
									<i class="fas fa-info-circle" id="icon-info"></i>
									<span class="help-inline"><?php?></span>
								</div>
							</div>
					    </div>

					</div>

					</form>
				</div>
			</div>
			<div class="btn-actions">
				<div class="form-actions">

					<button type="button" class="btn btn-success" id="btnSalvarAluno">Salvar</button>
					<button type="button" class="btn btn-success" id="btnAtualizarAluno">Atualizar</button>
					<a href="../Telas/ListarAlunos.php">
					<button type="button" class="btn btn-success" id="btnPesquisarAluno">Pesquisar</button></a>

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

		 var id = "<?php echo $IdAtualizar; ?>"; 

	      if(id != 0){
	          $('#btnAtualizarAluno').css('visibility','visible');
	          $('#btnSalvarAluno').css('visibility','hidden');
	      }else{
	          $('#btnAtualizarAluno').css('display','none');
	      }


			$('#btnSalvarAluno').on('click',function(e){

				var dados = $('.form-horizontal').serialize();
				var campos = $($('.form-horizontal')[0]).find("*[class='campo']");
				var vazios = false;

				//VERIFICAR CAMPOS E SELECTS VAZIOS
			    campos.each(function(indice,elemento){
			        if($(elemento).val() == ""){
			           $(elemento).focus();
			           vazios = true;
			           return false;
			        }else{
			        	vazios = false
			        }
			     });

			   if(!vazios){

			   	$.ajax({
					url: "../Aluno/RegistraAluno.php",
					datatype: 'JSON',
					type: 'POST',
					data: dados,
					success: function(response){

						if(response.status){
					
						 	 $('#alert').fadeIn(1000);
						 	 $('#alert').html('Aluno cadastrado com Sucesso!');

						 	   window.setTimeout(function(){
                                    $('#alert').fadeOut(900); 
                               },3000);

						     $('.form-horizontal')[0].reset();

						}else{

							 $('#alert').css('background','red');
							 $('#alert').fadeIn(1000);
						 	 $('#alert').html('Error de Inserção!');

						 	  window.setTimeout(function(){
                                    $('#alert').fadeOut(900); 
                              },3000);
						}					

					},error: function(error){
						console.log(error);
					}
				});
			  } 

			});


		  $('#btnAtualizarAluno').on('click',function(e){

	        var dados = $('.form-horizontal').serialize();

	        $.ajax({
	          url: "../Aluno/AtualizarAluno.php",
	          datatype: 'JSON',
	          type: 'POST',
	          data: dados,
	          success: function(response){

	            if(response.status){

	               $('#alert').fadeIn(1000);
	               $('#alert').html('Aluno atualizado com sucesso!');

	                 window.setTimeout(function(){
	                      $('#alert').fadeOut(900); 
	                      window.location = "../Telas/ListarAlunos.php";
	                  },3000);

	            }else{

	               $('#alert').css('background','red');
	               $('#alert').fadeIn(1000);
	               $('#alert').html('Error de Atualizacao!');

	                window.setTimeout(function(){
	                      $('#alert').fadeOut(900); 
	                },3000);
	            }         

	          },error: function(error){
	            console.log(error);
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