<?php
function isActivePage($currentPage, $pageName){
  if($currentPage == $pageName){
    return 'active';
  }
  return '';
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/main.css">
    <title>
      <?= $currentPage == 'index' ? 'Chef em Casa - Página Inicial' : ''; ?>
      <?= $currentPage == 'about' ? 'Chef em Casa - Sobre' : ''; ?>
      <?= $currentPage == 'contact' ? 'Chef em Casa - Contato' : ''; ?>
    </title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
  <a class="navbar-brand" href="index.php">
    Chef em Casa
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?= isActivePage($currentPage, 'index') ?>">
        <a class="nav-link" href="index.php">Página Inicial <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item <?= isActivePage($currentPage, 'about') ?>">
        <a class="nav-link" href="about.php">
            Sobre
        </a>
      </li>
      <li class="nav-item <?= isActivePage($currentPage, 'contact') ?>">
        <a class="nav-link" href="contact.php">
            Contato
        </a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a class="btn btn-color1 my-2 my-sm-0 text-light" href="register.php">
        Cadastre-se
      </a>
    </form>
  </div>
  </div>
</nav>