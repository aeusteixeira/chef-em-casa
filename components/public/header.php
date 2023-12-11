<?php

session_start();

include_once('helpers/isActivePage.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <link rel="stylesheet" href="src/css/main.css">
  <?php
    // Inclua as informações da página atual
    if (isset($pageInfo)) {
        echo "<title>{$pageInfo['title']}</title>";
        echo "<meta name='description' content='{$pageInfo['description']}'>";
    } else {
        echo "<title>Chef em Casa</title>";
        echo "<meta name='description' content='Bem-vindo ao Chef em Casa'>";
    }
    ?>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="src/img/logo.png" alt="Logo Chef em Casa" class="w-25">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
          <?php 
            if(!isset($_SESSION['user_id'])){
          ?>
            <a class="btn btn-outline-color1 my-2 my-sm-0" href="login.php">
              Login
            </a>
            <a class="btn btn-color1 my-2 my-sm-0 text-light ml-2" href="register.php">
              Cadastre-se
            </a>
          <?php } else { ?>
            <a class="btn btn-color1 my-2 my-sm-0 text-light ml-2" href="admin/index.php">
              Ir para o dashboard
            </a>
          <?php } ?>
        </form>
      </div>
    </div>
  </nav>