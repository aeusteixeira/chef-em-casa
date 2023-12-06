<?php

 $pageInfo = array(
  'title' => 'Login - Chef em Casa',
  'description' => 'Entre em contato com a equipe do Chef em Casa.',
  'pageName' => 'contact',
);

$pageName = $pageInfo['pageName'];

include_once(__DIR__ . '/components/public/header.php');
?>

<main class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
      <div class="card shadow">
        <div class="card-body">
          <h2 class="text-center mb-4">Bem-vindo de volta!</h2>
          
          <!-- Formulário de Login -->
          <form action="processar_login.php" method="POST">
            <div class="mb-3">
              <label for="username" class="form-label">Nome de Usuário</label>
              <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Senha</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Entrar</button>
          </form>
          
          <div class="text-center mt-3">
            <a href="cadastro.php">Não tem uma conta? Cadastre-se aqui.</a>
          </div>
        </div>
      </div>
      <div class="text-center mt-3">
        <a href="#">Esqueceu a senha?</a>
      </div>
    </div>
  </div>
</main>

<?php
  include_once(__DIR__ . '/components/public/footer.php');
?>
