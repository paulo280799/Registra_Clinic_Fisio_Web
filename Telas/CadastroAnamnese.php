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
  <link rel="stylesheet" type="text/css" href="../css/styleCadastroFunc.css">
  <link rel="stylesheet"  type="text/css"  href="../css/styleMenu.css">
</head>
<body>

  <?php include_once '../Util/Menu.php'; ?>

  <div class="container">
    <form action="../Anamnese/RegistraAnamnese.php" method="post">
      <fieldset>
        <legend class="fw" style="text-align: center;">Cadastro de Anamnese</legend>
        
        <div class="form-group">
          <label id="nome" class="fw">Queixa Principal:</label>
          <input type="text" name="queixaPrincipal" class="form-control" id="queixaPrincipal" placeholder="">
        </div>

        <div class="form-group">
          <label id="dataNasc" class="fw">HPP:</label>
          <input type="text" name="hpp" class="form-control" id="hpp" placeholder="">
        </div>

        
        <div class="form-group">
          <label id="nome" class="fw">HDA:</label>
          <input type="text" name="hda" class="form-control" id="hda" placeholder="">
        </div>

        <div class="form-group">
          <label id="cpf" class="fw">Historia Familia:</label>
          <input type="text" name="historiaF" class="form-control" id="historiaF" placeholder="">
        </div>


        <div class="form-group">
          <label id="nome" class="fw">Historia Social:</label>
          <input type="text" name="historiaS" class="form-control" id="historiaS" placeholder="">
        </div>


        <div class="form-group">
          <label id="nome" class="fw">PA:</label>
          <input type="text" name="pa" class="form-control" id="pa" placeholder="">
        </div>

        <div class="form-group">
          <label id="nome" class="fw">FR:</label>
          <input type="text" name="fr" class="form-control" id="fr" placeholder="">
        </div>

       
        <div class="form-group">
          <label id="nome" class="fw">FC:</label>
          <input type="text" name="fc" class="form-control" id="fc" placeholder="">
        </div>

        <div class="form-group">
          <label id="especializacao" class="fw">Temperatura :</label>
          <input type="text" name="temperatura" class="form-control" id="temperatura" placeholder="">
        </div>

        <div class="form-group">
          <label id="especializacao" class="fw">Exames Complementares :</label>
          <input type="text" name="exames" class="form-control" id="exames" placeholder="">
        </div>

        <button type="submit" value="cadastrar" class="btn btn-outline-success">ENVIAR</button>
        <button type="submit" class="btn btn-outline-success">LIMPAR</button>
        <br>
        <br>
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