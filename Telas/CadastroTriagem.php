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
       $sql = 'SELECT * FROM TRIAGEM WHERE IDTRIAGEM = ?';
       $dao->setCondicao($IdAtualizar);
       $dados = $dao->getDados($sql,false);
    }

    ?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
    <!-- Required meta tags -->
    <title>Cadastro Triagem</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Abel" rel="stylesheet"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/styleCadastroTriagem.css">
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
                    <h3 class="well"><i class="fas fa-stethoscope"></i>Triagem</h3>
                </div>
          <div class="card-body">
            <form class="form-horizontal">

             <div class="group-bloco">

                <div class="bloco">
                              
  	            <div class="form-group">
  	              <div class="controls">
  	                <input size="50" class="campo" name="nomePaciente" type="text" autocomplete="off" value="<?php isset($_GET['id']) ? print($dados->NOMEPAC) : print(""); ?>" required>
  	                <label class="control-label">Paciente</label>
  	                <i class="fas fa-info-circle infoNome" id="icon-info" data-toggle="popover" data-placement="left" 
  	                data-content="Ola mundo"></i>
                    <span id="btnConsultarPacientes"><i class="fas fa-search" id="icon-search"></i></span>
  	                <input type="hidden" name="" value="<?php isset($_GET['id']) ? print($dados->IDPACIENTE) : print(""); ?>">
  	              </div>

  	            </div>

                </div>
                
                <div class="bloco" style="display: none;">
                    <input type="text" name="idPacTriagem" id="idPacTriagem" value="">
                    <input type="text" name="idAtendTriagem" id="idAtendTriagem" value="">
                </div>

              <div class="bloco">

  	            <div class="form-group">
  	              <div class="controls">
  	                <input size="40" class="campo" name="tipoAtend" type="text" value="<?php isset($_GET['id']) ? print(date("d-m-Y",strtotime($dados->DATANASCPAC))) : print(""); ?>" autocomplete="off" required>
  	                <label class="control-label">Atendimento</label>
  	                <i class="fas fa-info-circle infoDataNasc" id="icon-info" data-toggle="popover" data-placement="left" 
  	                data-content="Ola mundo"></i>
                    <span id="btnConsultarAtend"><i class="fas fa-search" id="icon-search"></i></span>
  	              </div>
  	            </div>

              </div>

            </div>
              <div class="group-bloco" style="text-align: center;">

                <div class="bloco"> 

                  <div class="form-group">
                    <div class="controls">
                      <select class="campo" name="prioridadeTriagem" required>
                        <option value=""></option>
                        <option value="Amarelo">Amarelo</option>
                        <option value="Verde">Verde</option>
                        <option value="Amarelo">Azul</option>
                        <option value="Verde">Vermelho</option>
                      </select>
                      <label class="control-label">Prioridade Atendimento</label>
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

            <button type="button" class="btn btn-success" id="btnSalvarTriagem">Salvar</button>
            <button type="button" class="btn btn-success" id="btnAtualizarTriagem">Atualizar</button>
            <a href="#">
            <button type="button" class="btn btn-success" id="btnPesquisarTriagem">Pesquisar</button></a>

          </div>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- MODAL BOOTSTRAP PESQUISA PACIENTE -->
    <div class="modal fade" id="modalPesquisaPac" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="width: 400px; height: 500px;">
          <div class="modal-header">
            <h5 class="modal-title" id="TituloModalCentralizado">Pacientes</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-search">
               <input type="text" name="search" id="searchPacientes" autocomplete="off" placeholder="Pesquise Aqui...">
          </div>
          <div class="modal-body">
            <table id="tabelaPacientes"></table>
          </div>
        </div>
      </div>
    </div>
    <!-- MODAL BOOTSTRAP PESQUISA PACIENTE -->
    <!-- MODAL BOOTSTRAP PESQUISA ATENDIMENTO -->
    <div class="modal fade" id="modalPesquisaAtend" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="width: 400px; height: 500px;">
          <div class="modal-header">
            <h5 class="modal-title" id="TituloModalCentralizado">Atendimentos</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-search">
               <input type="text" name="search" id="searchAtendimentos" autocomplete="off" placeholder="Pesquise Aqui...">
          </div>
          <div class="modal-body">
            <table id="tabelaAtendimentos"></table>
          </div>
        </div>
      </div>
    </div>
    <!-- MODAL BOOTSTRAP PESQUISA PACIENTE -->
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
            $('#btnAtualizarTriagem').css('visibility','visible');
            $('#btnSalvarTriagem').css('visibility','hidden');
        }else{
            $('#btnAtualizarTriagem').css('display','none');
        }


        $('#btnSalvarTriagem').on('click',function(e){

          var dados = $('.form-horizontal').serialize();
         
          $.ajax({
            url: "../Triagem/RegistrarTriagem.php",
            datatype: 'JSON',
            type: 'POST',
            data: dados,
            success: function(response){

              if(response.status){
            
                 $('#alert').fadeIn(1000);
                 $('#alert').html('Triagem cadastrada com sucesso!');

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

                 $('.form-horizontal')[0].reset();
              }         

            },error: function(error){
              console.log("Error: "+error.responseText);
            }
          });

        });


        $('#btnAtualizarTriagem').on('click',function(e){

          var dados = $('.form-horizontal').serialize();

          $.ajax({
            url: "../Paciente/AtualizarPaciente.php",
            datatype: 'JSON',
            type: 'POST',
            data: dados,
            success: function(response){

              if(response.status){

                 $('#alert').fadeIn(1000);
                 $('#alert').html('Paciente Atualizado com sucesso!');

                   window.setTimeout(function(){
                        $('#alert').fadeOut(900); 
                        window.location = "../Telas/ListarPacientes.php";
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
<script type="text/javascript">


    $('#btnConsultarPacientes').click(function(){
      $('#modalPesquisaPac').modal('show');
    });

    $('#btnConsultarAtend').click(function(){
      $('#modalPesquisaAtend').modal('show');
    });

    $('#searchPacientes').keyup(function(e){
          
          var valorCampo = $(this).val();
          var filhos = $('#tabelaPacientes')[0].children;

        $.ajax({
          url: "../Triagem/ConsultarPaciente.php",
          datatype: 'JSON',
          type: 'POST',
          data:{ nomePaciente: valorCampo},
          success: function(response){

            if(valorCampo == ''){             

                 for (var i = 0; i < filhos.length; i++) {
                      if(filhos.length >= 0){
                        $('#tabelaPacientes')[0].removeChild(filhos[0]);
                      }
                  }

            }else{

               if(response.status){

                console.log(response.nome);

                   for (var i = 0; i < filhos.length; i++) {
                      if(filhos.length >= 0){
                        $('#tabelaPacientes')[0].removeChild(filhos[0]);
                      }
                   }

                var arrayPacientes = response.nome;

                for (var i = 0; i < arrayPacientes.length; i++) {
                      $('#tabelaPacientes').
                      append("<tr onclick='setarCampoPesquisaPac(this);'><td>"+arrayPacientes[i].NOMEPAC+"</td><td style='display:none;'>"+arrayPacientes[i].IDPACIENTE+"</td></tr>");
                }

              }else{


                     for (var i = 0; i < filhos.length; i++) {
                        if(filhos.length >= 0){
                          $('#tabelaPacientes')[0].removeChild(filhos[0]);
                        }
                     }
                    

                   /* $('.dados').html('');

                   $('table > .dados').each(function(){
                        $(this).find('#cl1').show();
                   });*/
                  
                }  

            }     


            },error: function(error){
              console.log(error.responseText);
            }
          });

      });


     $('#searchAtendimentos').keyup(function(e){
          
          var valorCampo = $(this).val();
          var filhos = $('#tabelaAtendimentos')[0].children;

        $.ajax({
          url: "../Atendimento/ConsultarAtendimento.php",
          datatype: 'JSON',
          type: 'POST',
          data:{ tipoAtend: valorCampo},
          success: function(response){

            if(valorCampo == ''){             

                 for (var i = 0; i < filhos.length; i++) {
                      if(filhos.length >= 0){
                        $('#tabelaAtendimentos')[0].removeChild(filhos[0]);
                      }
                  }

            }else{

               if(response.status){

                console.log(response.nome);

                   for (var i = 0; i < filhos.length; i++) {
                      if(filhos.length >= 0){
                        $('#tabelaAtendimentos')[0].removeChild(filhos[0]);
                      }
                   }

                var arrayPacientes = response.nome;

                for (var i = 0; i < arrayPacientes.length; i++) {
                      $('#tabelaAtendimentos').
                      append("<tr onclick='setarCampoPesquisaAtend(this);'><td>"+arrayPacientes[i].TIPOATENDIMENTO+"</td><td style='display:none;'>"+arrayPacientes[i].IDATENDIMENTO+"</td></tr>");
                }

              }else{


                     for (var i = 0; i < filhos.length; i++) {
                        if(filhos.length >= 0){
                          $('#tabelaAtendimentos')[0].removeChild(filhos[0]);
                        }
                     }
                    

                   /* $('.dados').html('');

                   $('table > .dados').each(function(){
                        $(this).find('#cl1').show();
                   });*/
                  
                }  

            }     


            },error: function(error){
              console.log(error.responseText);
            }
          });

      });


    function setarCampoPesquisaPac(elemento){

      var nome = $(elemento)[0].firstChild;
      var id = $(elemento)[0].lastChild;

      $('input[name="nomePaciente"]').val($(nome).text());
      $('#idPacTriagem').val($(id).text());
      $('#modalPesquisaPac').modal('hide');
      
    }



   function setarCampoPesquisaAtend(elemento){

      var tipo = $(elemento)[0].firstChild;
      var id = $(elemento)[0].lastChild;

      $('input[name="tipoAtend"]').val($(tipo).text());
      $('#idAtendTriagem').val($(id).text());
      $('#modalPesquisaAtend').modal('hide');
    }

</script>
</html>