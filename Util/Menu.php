<link rel="stylesheet" href="../css/styleMenu.css">
<!---- MENU PRINCIPAL  ---->
   <nav class="navbar navbar-expand-lg navbar-light" id="nav-menu">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#abrirMenuResponsivo" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation" id="barra-menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="abrirMenuResponsivo">
      <img src="../Imagens/logo.png" alt="logo" class="logo-menu">
      <a class="navbar-brand" href="#" id="nome-logo">Registra Clinic Fisio</a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0" id="menu-opcoes">
            <li class="nav-item active"  id="items-li">
              <a class="nav-link" href="#" id="items-a">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active" id="items-li">
              <a class="nav-link" href="Telas/CadastroPaciente.php" id="items-a">Cadastro<span class="sr-only">(current)</span></a>
                <ul class="sub-menu">
                  <li class="sub-menu-li"><a href="#">Paciente</a></li>
                  <li class="sub-menu-li"><a href="#">Professor</a></li>
                  <li class="sub-menu-li"><a href="#">Aluno</a></li>
                </ul>
            </li>
            <li class="nav-item active"  id="items-li">
              <a class="nav-link" href="#" id="items-a">Atendimento<span class="sr-only">(current)</span></a>
                 <ul class="sub-menu">
                  <li class="sub-menu-li"><a href="#">Agendar</a></li>
                </ul>
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