<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>LOGIN</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Abel" rel="stylesheet">  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/styleModalLogin.css">
</head>
<body>
    
<!-- Modal HTML -->
<div id="ModalLogin" class="modal fade" data-backdrop="static" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-login">
           <div class="alert alert-danger" id="alert" role="alert" style="text-align:center;padding:7px;display:none;margin-bottom:-25px;">  
           </div>  
		<div class="modal-content">
			<div class="modal-header">	
                <div class="header-pos">
                    <img src="Imagens/logo.png" alt="logo" class="logo">
                </div>
                <div class="header-pos">
                     <h4 class="modal-title">LOGIN</h4>
                </div>
            </div>
			<div class="modal-body">
				<form id="form">
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input type="text" class="form-control" name="login" placeholder="Login" required="required" autocomplete="off">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-lock"></i></span>
							<input type="password" class="form-control" name="senha" placeholder="Senha" required="required" autocomplete="off">
						</div>
					</div>
					<div class="form-group">
						<button type="button" class="btn" id="btnEntrar">Entrar</button>
					</div>
					<p class="hint-text"><a href="#">Esqueceu sua Senha?</a></p>
				</form>
			</div>
            <div class="modal-footer"><input type="checkbox" id="check"><a><label for="check">Lembrar Senha</label></a></div>
		</div>
	</div>
</div>     
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

<script type="text/javascript">
	$(document).ready(function(){

		$('#ModalLogin').modal('show');
        
        $('#btnEntrar').click(function(e){
            
            var form = $('#form').serialize();

            if($('input[name="login"]').val() == '' || $('input[name="senha"]').val() == ''){
                 $('#alert').fadeIn(1000);
                 $('#alert').html('Campos Obrigatórios!!');
            }else{

                 $.ajax({
                 url:'Login/Autenticar.php',
                 type:'POST',
                 datatype: 'JSON',
                 data:form,
                 success: function(response){
                     
                    if(response.status){
                        window.location = 'Telas/';  
                        console.log(response.tipo);
                    }else{
                        $('#alert').fadeIn(1000);
                        $('#alert').html('Usuário não encontrado..');
                    }
                  
                 },error: function(error){
                     console.log('Erro na Requisição');
                 }
              }); 
           }
                   
       
        });
        
        
        $("input[name='login'],input[name='senha']").focus(function(){
           $('#alert').fadeOut(900); 
        });
        
        
	});
</script>
</html> 


