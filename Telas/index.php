<?php  
ini_set('session.save_path',realpath(dirname($_SERVER['DOCUMENT_ROOT']) . '/../tmp'));
session_start();

sleep(1);

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

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Registra CLinic Fisio</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Abel" rel="stylesheet">  
    <link rel="stylesheet" href="../css/stylePrincipal.css">
    <link rel="stylesheet" href="../css/styleMenu.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
  
    <?php include '../Util/Menu.php'; ?>
    
<section class="container">
  
    <div class="container-table">
    
        <table class="table table-striped" id="tabelPAcientes">
            <caption>Lista de pacientes a serem atendidos</caption>
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Horario</th>
                <th scope="col">Atendimento</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>...</td>
                <td>...</td>
                <td>...</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>...</td>
                <td>...</td>
                <td>...</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>...</td>
                <td>...</td>
                <td>...</td>
              </tr>
            </tbody>
        </table>    
        
    </div>
     
</section>
    
<footer class="rodape"></footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script type="text/javascript">

   $(document).ready(function(e){

     var tipo = "<?php echo $tipo;?>";

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
</body>
</html>