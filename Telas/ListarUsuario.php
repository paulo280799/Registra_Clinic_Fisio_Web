<?php

$id = null;

if(isset($_GET['id'])){
    $id = $_GET['id'];
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Lista de Usuarios</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/styleListarUsuario.css">
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
                    <a class="nav-link" href="../Telas/CadastroPaciente.php">Paciente <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../Telas/CadastroUsuario.php">Usuário<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Atendimento <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>


      <div class="container">

            <div class="row">
                <p>
                    <a href="../Telas/CadastroUsuario.php" class="btn btn-success">Adicionar</a>
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
                        include_once '../Util/daoGenerico.php';

                        $dao = new daoGenerico();
                        $sql = 'SELECT * FROM USUARIO ORDER BY IDUSUARIO ASC';
                        $dados = $dao->getDados($sql,true);

                        foreach($dados as $row){
                            echo '<tr>';
			                echo '<th scope="row">'. $row->IDUSUARIO . '</th>';
                            echo '<td>'. $row->NOME . '</td>';
                            echo '<td>'. $row->LOGIN . '</td>';
                            echo '<td>'. $row->SENHA . '</td>';
                            echo '<td width=250>';
                            echo ' ';
                            echo '<a class="btn btn-success" href="../Telas/CadastroUsuario.php?id='.$row->IDUSUARIO.'">Atualizar</a>';
                            echo ' ';
                            echo '<a class="btn btn-danger" href="../Telas/ListarUsuario.php?id='.$row->IDUSUARIO.'">Excluir</button>';
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
 <script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- ------------------------ -->

<script type="text/javascript">
    $(document).ready(function(){

      var valor = '<?php echo $id; ?>';

      if(valor != 0){
        $('#ModalNotificacao').modal('show');
        $('#ModalNotificacao .modal-body').html('Deseja Excluir o Usuário Selecionado??');
      }

      $('#btnConfirm').click(function(){
        $.ajax({
            url: '../Usuario/ExcluirUsuario.php',
            method: 'POST',
            datatype: 'JSON',
            data: { id : valor},
            success: function(e){

                var json = JSON.parse(e);

                if(json.resposta){
                   window.location = '../Telas/ListarUsuario.php';   
                }
                
            },error: function(e){
                alert('ERRO DE ENVIO PARA EXCLUSAO DO USUARIO!!');
            }
        })
      });


      $('#btnCancelar').click(function(){
         history.back(0);
      });
        
    
    });
</script>
</html>
