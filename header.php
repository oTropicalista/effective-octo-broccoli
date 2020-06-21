<!--
Nome: header.php
Autor: Joni
Data: 31/03/2020
Função: Arquivo php contendo a navbar para sser importado em todas as telas
-->

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand dropdown-toggle" href="#"  id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Escala</a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
      <a class="dropdown-item" href="#">Cadastro</a>
      <a class="dropdown-item" href="#">Escala</a>
      <a class="dropdown-item" href="#">Produtividade</a>
      <a class="dropdown-item" href="#">Processos</a>
      <a class="dropdown-item" href="#">Financeiro</a>
      <a class="dropdown-item" href="#">Acessos</a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="pac_index.php">Pacientes<span class="sr-only">(Página atual)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="imp_index.php">Implantações</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Gestão de Vagas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Escala Geral</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Escala Diária</a>
        </li>
      </ul>
    </div>
</nav>
