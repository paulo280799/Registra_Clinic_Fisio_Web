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
     $sql = 'SELECT * FROM SUPERVISOR WHERE IDSUPERVISOR = ?';
     $dao->setCondicao($IdAtualizar);
     $dados = $dao->getDados($sql,false);
  }

  ?>
  <!DOCTYPE html>
  <html lang="pt-br">
  <head>
  <!-- Required meta tags -->
  <title>Cadastro Supervisor</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Abel" rel="stylesheet"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/styleCadastroProf.css">
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
                  <h3 class="well"><i class="fas fa-chalkboard-teacher"></i>Cadastro Supervisor</h3>
          </div>
        <div class="card-body">
          <form class="form-horizontal">

           <div class="group-bloco">

              <div class="bloco">
                            
                  <div class="form-group">
                    <div class="controls">
                      <input size="50" class="campo" name="nomeSuper" type="text" autocomplete="off" value="<?php isset($_GET['id']) ? print($dados->NOMESUPER) : print(""); ?>" required>
                      <label class="control-label">Nome</label>
                      <i class="fas fa-info-circle infoNome" id="icon-info" data-toggle="popover" data-placement="left" 
                      data-content="Ola mundo"></i>
                      <span class="help-inline"><?php?></span>
                      <input type="hidden" name="idSuper" value="<?php isset($_GET['id']) ? print($dados->IDSUPERVISOR) : print(""); ?>">
                    </div>
                  </div>

              </div>

            <div class="bloco">

            <div class="form-group">
              <div class="controls">
                <input size="40" class="campo" id="dataNasc" name="dataNascSuper" type="text" value="<?php isset($_GET['id']) ? print(date("d-m-Y",strtotime($dados->DATANASCSUPER))) : print(""); ?>" autocomplete="off" required>
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
                <select class="campo" name="sexoSuper" value="<?php isset($_GET['id']) ? print($dados->SEXOSUPER) : print(""); ?>" required>
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
            <div class="group-bloco" style="text-align: center;">

            <div class="bloco"> 

              <div class="form-group">
                <div class="controls">
                  <input size="40" class="campo" id="cpf" name="cpfSuper" type="text" value="<?php isset($_GET['id']) ? print($dados->CPFSUPER) : print(""); ?>" autocomplete="off" required>
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
                  <input size="40" class="campo" name="rgSuper" type="text" value="<?php isset($_GET['id']) ? print($dados->RGPSUPER) : print(""); ?>" autocomplete="off" required>
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
                  <input size="40" class="campo" name="enderecoSuper" type="text" value="<?php isset($_GET['id']) ? print($dados->ENDERECOSUPER) : print(""); ?>" autocomplete="off" required>
                  <label class="control-label">Endereço:</label>
                  <i class="fas fa-info-circle" id="icon-info"></i>
                  <span class="help-inline"><?php?></span>
                </div>
              </div>

              </div>
              <div class="bloco">


              <div class="form-group">
              
                <div class="controls">
                  <input size="40" class="campo" name="bairroSuper" type="text" value="<?php isset($_GET['id']) ? print($dados->BAIRROSUPER) : print(""); ?>" autocomplete="off" required>
                  <label class="control-label">Bairro:</label>
                  <i class="fas fa-info-circle" id="icon-info"></i>
                  <span class="help-inline"><?php?></span>
                </div>
              </div>

            </div>
            <div class="bloco"> 

              <div class="form-group">
                
                <div class="controls">
                  <input size="40" class="campo" name="cidadeSuper" type="text" value="<?php isset($_GET['id']) ? print($dados->CIDADESUPER) : print(""); ?>" autocomplete="off" required>
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
                          <select class="campo" name="estadoCivilSuper" required>
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
                  <input size="40" class="campo" id="telefone" name="telefoneSuper" type="text" value="<?php isset($_GET['id']) ? print($dados->TELEFONESUPER) : print(""); ?>" autocomplete="off" required>
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
                     <input size="10" class="campo" id="especializacao" name="especializacaoSuper" type="text" value="<?php isset($_GET['id']) ? print($dados->ESPECIALIZACAO) : print(""); ?>" autocomplete="off" required>
                     <label class="control-label">Especialização:</label>
                     <i class="fas fa-info-circle" id="icon-info"></i>
                     <span class="help-inline"><?php?></span>
                  </div>
                </div>

             </div>
  

             <div class="bloco">
<div class="form-group">
  <div class="controls">
     <input size="5" class="campo" id="naturalidade" name="naturalidade" type="text" value="<?php isset($_GET['id']) ? print($dados->NATURALIDADE) : print(""); ?>" autocomplete="off" required>
     <label class="control-label">Naturalidade:</label>
     <i class="fas fa-info-circle" id="icon-info"></i>
     <span class="help-inline"><?php?></span>
  </div>
</div>

</div>




<div class="form-group">
  <div class="controls">
     <input size="5" class="campo" id="ocupacao" name="ocupacao" type="text" value="<?php isset($_GET['id']) ? print($dados->OCUPACAO) : print(""); ?>" autocomplete="off" required>
     <label class="control-label">Ocupação:</label>
     <i class="fas fa-info-circle" id="icon-info"></i>
     <span class="help-inline"><?php?></span>
  </div>
</div>

</div>





<div class="form-group">
  <div class="controls">
     <input size="5" class="campo" id="profissao" name="profissao" type="text" value="<?php isset($_GET['id']) ? print($dados->PROFISSAO) : print(""); ?>" autocomplete="off" required>
     <label class="control-label">Profissão::</label>
     <i class="fas fa-info-circle" id="icon-info"></i>
     <span class="help-inline"><?php?></span>
  </div>
</div>

</div>
</div class="bloco">



                <div class="form-group">
                  
                  <div class="controls">
                    <input size="10" class="campo" name="loginSuper" type="text" value="<?php isset($_GET['id']) ? print($dados->LOGIN) : print(""); ?>" autocomplete="off" required>
                    <label class="control-label">Login:</label>
                    <i class="fas fa-info-circle" id="icon-info"></i>
                    <span class="help-inline"><?php?></span>
                  </div>
                </div>

              </div>
              <div class="bloco">

                <div class="form-group">
                
                  <div class="controls">
                    <input size="10" class="campo" name="senhaSuper" type="password" value="<?php isset($_GET['id']) ? print($dados->SENHA) : print(""); ?>" autocomplete="off" required>
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

          <button type="button" class="btn btn-success" id="btnSalvarProf">Salvar</button>
          <button type="button" class="btn btn-success" id="btnAtualizarProf">Atualizar</button>
          <a href="../Telas/ListarProfessor.php">
          <button type="button" class="btn btn-success" id="btnPesquisarProf">Pesquisar</button></a>

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
          $('#btnAtualizarProf').css('visibility','visible');
          $('#btnSalvarProf').css('visibility','hidden');
      }else{
          $('#btnAtualizarProf').css('display','none');
      }


      $('#btnSalvarProf').on('click',function(e){

        var dados = $('.form-horizontal').serialize();

        $.ajax({
          url: "../Supervisor/RegistraSupervisor.php",
          datatype: 'JSON',
          type: 'POST',
          data: dados,
          success: function(response){

            if(response.status){
          
               $('#alert').fadeIn(1000);
               $('#alert').html('Supervisorr cadastrado com sucesso!');

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

      });


      $('#btnAtualizarProf').on('click',function(e){

        var dados = $('.form-horizontal').serialize();

        $.ajax({
          url: "../Supervisor/AtualizarSupervisor.php",
          datatype: 'JSON',
          type: 'POST',
          data: dados,
          success: function(response){

            if(response.status){

               $('#alert').fadeIn(1000);
               $('#alert').html('Supervisor Atualizado com sucesso!');

                 window.setTimeout(function(){
                      $('#alert').fadeOut(900); 
                      window.location = "../Telas/ListarProfessor.php";
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
  </html>