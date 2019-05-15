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
    <title>Registra CLinic Fisio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/styleIndexPrincipal.css">
</head>
<body>
  
   <!---- MENU PRINCIPAL  ---->
   <nav class="navbar navbar-expand-lg navbar-light" id="nav-menu">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#abrirMenuResponsivo" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation" id="barra-menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="abrirMenuResponsivo">
      <img src="../Imagens/logo.png" alt="logo" class="logo-menu">
      <a class="navbar-brand" href="#" id="nome-logo">Registra Clinic Fisio</a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0" id="menu-opcoes">
            <li class="nav-item active" id="items-li">
              <a class="nav-link" href="Telas/CadastroPaciente.php" id="items-a">Paciente<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active"  id="items-li">
              <a class="nav-link" href="Telas/CadastroPaciente.php" id="items-a">Funcionario<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active"  id="items-li">
              <a class="nav-link" href="#" id="items-a">Atendimento<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active"  id="items-li">
              <a class="nav-link" href="../Login/Logout.php?id=<?php echo $id;?>&tipo=<?php echo $tipo;?>" id="items-a">Sair<i class="fas fa-sign-out-alt"></i></a>
            </li>
        </ul>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav" id="menu-logado">
             <li class="nav-item">
                <span>Bem Vindo |</span>
             </li>
             <li class="nav-item">
                <span><?php echo explode(' ',$logado)[0];?><i class="fas fa-user"></i></span>
             </li>
        </ul>
    </div>
  </nav>
  <!---------------- FIM MENU PRINCIPAL  ------------>
    
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
                <td>Mark</td>
                <td>10:30</td>
                <td>CardioRespiratório</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>11:00</td>
                <td>Terapia Aquatica</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>11:30</td>
                <td>CardioRespiratório</td>
              </tr>
            </tbody>
        </table>    
        
        </div>
     
</section>
    
<footer class="rodape">
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>