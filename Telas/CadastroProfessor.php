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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="css.style.css">

  <title>Registra Clinic Fisio</title>
</head>
<body>

  <?php include_once '../Util/Menu.php'; ?>

  <div class="container">
    <form action="../Professor/RegistraProfessor.php" method="post">
      <fieldset>
        <legend class="fw" style="text-align: center;">Cadastro de Professor</legend>
        
        <div class="form-group">
          <label id="nome" class="fw">Nome:</label>
          <input type="text" name="nomeProfessor" class="form-control" id="nomeProfessor" placeholder="Informe seu nome completo">
        </div>

        <div class="form-group">
          <label id="dataNasc" class="fw">Data Nascimento:</label>
          <input type="date" name="dataNasc" class="form-control" id="dataNasc" placeholder="Informe sua data de nascimento">
        </div>

        <div class="form-group">
          <label style="margin-right: 5px;" class="fw">Sexo:</label>
          <div class="form-group form-check-inline">
            <input type="radio" class="form-check-input" name="sexo" value="M" id="masc" >
            <label class="form-check-input" for="masc">Masculino</label>
          </div>
          <div class="form-group form-check-inline">
            <input type="radio" class="form-check-input" name="sexo" value="F" id="femi">
            <label class="form-check-input" for="femi">Feminino</label>
          </div>
        </div>

        <div class="form-group">
          <label id="nome" class="fw">RG:</label>
          <input type="text" name="rg" class="form-control" id="rg" placeholder="Informe seu RG">
        </div>

        <div class="form-group">
          <label id="cpf" class="fw">CPF:</label>
          <input type="text" name="cpf" class="form-control" id="cpf" placeholder="Informe seu CPF">
        </div>

        <div class="form-group">
          <label style="margin-right: 5px;" class="fw">Estado Civil:</label>
          <div class="form-group form-check-inline">
            <input type="radio" class="form-check-input" name="estadoCivil" value="C" id="casado" >
            <label class="form-check-input" for="masc">Casado(a)</label>
          </div>
          <div class="form-group form-check-inline">
            <input type="radio" class="form-check-input" name="estadoCivil" value="S" id="solteiro" >
            <label class="form-check-input" for="femi">Solteiro(a)</label>
          </div>
        </div>

        <div class="form-group">
          <label id="nome" class="fw">Cidade:</label>
          <input type="text" name="cidade" class="form-control" id="cidade" placeholder="Informe sua Cidade">
        </div>

        <div class="form-group">
          <label id="nome" class="fw">Bairro:</label>
          <input type="text" name="bairro" class="form-control" id="bairro" placeholder="Informe sua Bairro">
        </div>

        <div class="form-group">
          <label id="nome" class="fw">Rua:</label>
          <input type="text" name="rua" class="form-control" id="rua" placeholder="Informe sua Rua">
        </div>

        <div class="form-group">
          <label id="nome" class="fw">Numero da casa:</label>
          <input type="text" name="numCasa" class="form-control" id="numCasa" placeholder="Informe o Numero da sua casa">
        </div>

        <div class="form-group">
          <label id="nome" class="fw">Telefone:</label>
          <input type="text" name="telefone" class="form-control" id="telefone" placeholder="Informe seu Telefone">
        </div>

        <div class="form-group">
          <label id="especializacao" class="fw">Especialização :</label>
          <input type="text" name="especializacao" class="form-control" id="especializacao" placeholder="Informe sua Especialização">
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