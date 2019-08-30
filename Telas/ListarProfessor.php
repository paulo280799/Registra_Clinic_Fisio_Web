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


$id = null;

if(isset($_GET['id'])){
    $id = $_GET['id'];
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Lista de Professores</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Abel" rel="stylesheet"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/styleListarAlunos.css">
    <link rel="stylesheet"  type="text/css"  href="../css/styleMenu.css">
</head>

<body>

    <?php require '../Util/Menu.php'; ?>

      <div class="container">

            <div class="row">
                <p>
                    <a href="../Telas/CadastroProfessor.php" class="btn btn-success">Adicionar</a>
                </p>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Login</th>
                            <th scope="col">Senha</th>
                            <th scope="col">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require '../Util/daoGenerico.php';

                        $dao = new daoGenerico();
                        $sql = 'SELECT * FROM PROFESSOR ORDER BY IDPROF ASC';
                        $dados = $dao->getDados($sql,true);

                        foreach($dados as $row){
                            echo '<tr>';
			                echo '<th scope="row">'. $row->IDPROF . '</th>';
                            echo '<td>'. $row->NOMEPROF . '</td>';
                            echo '<td>'. $row->LOGIN . '</td>';
                            echo '<td>'. $row->SENHA . '</td>';
                            echo '<td width=250>';
                            echo ' ';
                            echo '<a class="btn btn-success" href="../Telas/CadastroProfessor.php?id='.$row->IDPROF.'">Atualizar</a>';
                            echo ' ';
                            echo '<a class="btn btn-danger" href="../Telas/ListarProfessor.php?id='.$row->IDPROF.'">Excluir</button>';
                            echo '</td>';
                            echo '</tr>';
                        }
                        
                        ?>
                    </tbody>
                </table>
           </div>
      </div>

<!-- MODAL NOTIFICAÇÃO -->
<div class="modal fade" id="ModalNotificacao" data-backdrop="static"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Atenção</h5>
   
      </div>
      <div class="modal-body"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" id="btnConfirm">Confirmar</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal" id="btnCancelar">Cancelar</button>
      </div>
    </div>
  </div>
</div>      
</body>
<!-- FIM MODAL NOTIFICAÇÃO -->
<!-- -------- SCRIPTS ------- -->
 <script src="../js/jquery-3.4.1.min.js"></script>
 <script src="../bootstrap-4.3.1/js/bootstrap.min.js"></script>
<!-- ------------------------ -->

<script type="text/javascript">
    $(document).ready(function(e){

      var valor = "<?php echo $id; ?>";

      if(valor != 0){
        $('#ModalNotificacao').modal('show');
        $('#ModalNotificacao .modal-body').html('Deseja Excluir o Usuário Selecionado??');
      }

      $('#btnConfirm').click(function(e){
        $.ajax({
            url: '../Professor/ExcluirProfessor.php',
            type: 'POST',
            datatype: 'JSON',
            data: { id : valor},
            success: function(response){

                if(response.status){
                   window.location = '../Telas/ListarProfessor.php';   
                }
                
            },error: function(e){
                console.log('ERRO DE ENVIO: '+e.responseText);
            }
        })
      });


      $('#btnCancelar').click(function(e){
         history.back(0);
      });
    
    });
</script>
</html>
