<?php

 $pageInfo = array(
  'title' => 'Contato - Chef em Casa',
  'description' => 'Entre em contato com a equipe do Chef em Casa.',
  'pageName' => 'contact',
);

$pageName = $pageInfo['pageName'];

include_once(__DIR__ . '/components/public/header.php');
?>

<main class="container my-5">
    <div class="row">
        <div class="col-md-6">
            <h1 class="mb-4">Entre em Contato</h1>
            <p>
                Tem alguma pergunta, sugestão ou apenas quer dizer olá? Ficaríamos felizes em ouvir de você!
            </p>
            <p>
                Use o formulário abaixo ou envie-nos um e-mail diretamente em <a href="mailto:contato@chefemcasa.com">contato@chefemcasa.com</a>.
            </p>
        </div>
        <div class="col-md-6">
            <form action="processa_contato.php" method="post">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="mensagem">Mensagem:</label>
                    <textarea class="form-control" id="mensagem" name="mensagem" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-success">Enviar Mensagem</button>
            </form>
        </div>
    </div>
</main>

<?php
  include_once(__DIR__ . '/components/public/footer.php');
?>
