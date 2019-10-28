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
         $sql = 'SELECT * FROM ANAMNESE WHERE IDANAMNESE = ?';
         $dao->setCondicao($IdAtualizar);
         $dados = $dao->getDados($sql,false);
       }

       ?>
       <!DOCTYPE html>
       <html lang="pt-br">
       <head>
        <!-- Required meta tags -->
        <title>Cadastro Anamnese</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Abel" rel="stylesheet"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../css/styleCadastroAnam.css">
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
                <h3 class="well"><i class="fas fa-paste"></i>Cadastro Anamnese</h3>
              </div>
              <div class="card-body">
                <form class="form-horizontal">

                 <div class="group-bloco">

                  <div class="bloco">

                    <div class="form-group">
                      <div class="controls">
                        <input size="50" class="campo" name="queixaPrincipal" type="text" autocomplete="off" value="<?php isset($_GET['id']) ? print($dados->QUEIXAPRINCIPAL) : print(""); ?>" required>
                        <label class="control-label">Queixa Principal</label>
                        <i class="fas fa-info-circle infoNome" id="icon-info" data-toggle="popover" data-placement="left" 
                        data-content="Ola mundo"></i>
                        <span class="help-inline"><?php?></span>
                        <input type="hidden" name="idAnam" value="<?php isset($_GET['id']) ? print($dados->IDANAMNESE) : print(""); ?>">
                      </div>
                    </div>

                  </div>

                  <div class="bloco">

                    <div class="form-group">
                      <div class="controls">
                        <input size="40" class="campo" name="hpp" type="text" value="<?php isset($_GET['id']) ? print($dados->HPP) : print(""); ?>" autocomplete="off" required>
                        <label class="control-label">HPP</label>
                        <i class="fas fa-info-circle infoDataNasc" id="icon-info" data-toggle="popover" data-placement="left" 
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
                        <input size="40" class="campo"  name="historicoFamiliar" type="text" value="<?php isset($_GET['id']) ? print($dados->HISTORICOFAMILIAR) : print(""); ?>" autocomplete="off" required>
                        <label class="control-label">Histórico Familiar</label>
                        <i class="fas fa-info-circle" id="icon-info" data-toggle="popover" data-placement="left" 
                        data-content="Ola mundo"></i>
                        <span class="help-inline"><?php?></span>
                      </div>
                    </div>

                  </div>

                  <div class="bloco">

                    <div class="form-group">
                      <div class="controls">
                        <input size="40" class="campo" name="hda" type="text" value="<?php isset($_GET['id']) ? print($dados->HDA) : print(""); ?>" autocomplete="off" required>
                        <label class="control-label">HDA</label>
                        <i class="fas fa-info-circle infoDataNasc" id="icon-info" data-toggle="popover" data-placement="left" 
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
                        <input size="40" class="campo" name="historicoSocial" type="text" value="<?php isset($_GET['id']) ? print($dados->HISTORICOSOCIAL) : print(""); ?>" autocomplete="off" required>
                        <label class="control-label">Histórico Social</label>
                        <i class="fas fa-info-circle" id="icon-info" data-toggle="popover" data-placement="left" 
                        data-content="Ola mundo"></i>
                        <span class="help-inline"><?php?></span>
                      </div>
                    </div>

                  </div>
                  <div class="bloco">

                    <div class="form-group">

                      <div class="controls">
                        <input size="40" class="campo" name="pa" type="text" value="<?php isset($_GET['id']) ? print($dados->PA) : print(""); ?>" autocomplete="off" required>
                        <label class="control-label">PA</label>
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
                        <input size="40" class="campo" name="fr" type="text" value="<?php isset($_GET['id']) ? print($dados->FR) : print(""); ?>" autocomplete="off" required>
                        <label class="control-label">FR</label>
                        <i class="fas fa-info-circle" id="icon-info"></i>
                        <span class="help-inline"><?php?></span>
                      </div>
                    </div>

                  </div>
                  <div class="bloco"> 

                    <div class="form-group">

                      <div class="controls">
                        <input size="40" class="campo" name="fc" type="text" value="<?php isset($_GET['id']) ? print($dados->FC) : print(""); ?>" autocomplete="off" required>
                        <label class="control-label">FC</label>
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
                      <input size="40" class="campo" name="temperatura" type="text" value="<?php isset($_GET['id']) ? print($dados->TEMPERATURA) : print(""); ?>" autocomplete="off" required>
                      <label class="control-label">Temperatura</label>
                      <i class="fas fa-info-circle" id="icon-info"></i>
                      <span class="help-inline"><?php?></span>
                    </div>
                  </div>

                </div> 

                <div class="bloco">

                  <div class="form-group">
                    <div class="controls">
                     <input size="10" class="campo"  name="examesComple" type="text" value="<?php isset($_GET['id']) ? print($dados->EXAMESCOMPLEMENTARES) : print(""); ?>" autocomplete="off" required>
                     <label class="control-label">Exames Complementares</label>
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

          <button type="button" class="btn btn-success" id="btnSalvar">Salvar</button>
          <button type="button" class="btn btn-success" id="btnAtualizar">Atualizar</button>
          <a href="../Telas/ListarAnamnese.php"><button type="button" class="btn btn-success" id="btnPesquisar">Pesquisar</button></a>
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
    $('#btnAtualizar').css('visibility','visible');
    $('#btnSalvar').css('visibility','hidden');
  }else{
    $('#btnAtualizar').css('display','none');
  }


  $('#btnSalvar').on('click',function(e){

    var dados = $('.form-horizontal').serialize();
    var camposForm = $($('.form-horizontal')[0]).find("input[class='campo']");
    var camposVazios = false;


    //VERIFICAR CAMPOS VAZIOS
    camposForm.each(function(indice,elemento){
         if($(elemento).val() == ""){
           $(elemento).focus();
           camposVazios = true;
           return false;
         } 
     });

    console.log(camposForm);   

     console.log(camposVazios);

      if(!camposVazios){

        $.ajax({
          url: "../Anamnese/RegistrarAnamnese.php",
          datatype: 'JSON',
          type: 'POST',
          data: dados,
          success: function(response){

            if(response.status){

             $('#alert').fadeIn(1000);
             $('#alert').html('Anamnese cadastrada com sucesso!!');

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

      }//------------------ FIM DO SE

    });


  $('#btnAtualizar').on('click',function(e){

    var dados = $('.form-horizontal').serialize();

      $.ajax({
        url: "../Anamnese/AtualizarAnamnese.php",
        datatype: 'JSON',
        type: 'POST',
        data: dados,
        success: function(response){

          if(response.status){

           $('#alert').fadeIn(1000);
           $('#alert').html('Cadastro Atualizado com sucesso!');

           window.setTimeout(function(){
            $('#alert').fadeOut(900); 
            window.location = "../Telas/ListarAnamnese.php";
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