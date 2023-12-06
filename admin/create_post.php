<?php
$pageInfo = array(
    'title' => 'Criar Nova Postagem',
    'description' => 'Crie uma nova postagem para compartilhar com seus leitores.',
    'pageName' => 'new_post',
);

include_once('../components/admin/header.php');
?>

<!-- Conteúdo do dashboard -->
<main class="container py-5">
    <div class="row">
        <!-- Sidebar do dashboard -->
        <div class="col-md-3">
            <?php
                include_once('../components/admin/menu_sidebar.php');
            ?>
        </div>
        <!-- Main do dashboard -->
        <section class="col-md-9">
            <h2><?= $pageInfo['title'] ?></h2>
            <p><?= $pageInfo['description'] ?></p>
            <hr>
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="title">Título da Postagem</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Insira o título da postagem">
                        </div>
                        <div class="form-group">
                            <label for="short_description">Descrição Curta (opcional)</label>
                            <textarea class="form-control" id="short_description" name="short_description" rows="2" placeholder="Uma descrição curta da postagem"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="content">Conteúdo da Postagem</label>
                            <textarea class="form-control" id="content" name="content" rows="6" placeholder="Escreva o conteúdo da postagem"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Imagem da Postagem</label>
                            <input type="file" class="form-control-file" id="image" name="image">
                        </div>
                        <button type="submit" class="btn btn-primary">Publicar</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</main>

<?php
$currentPage = 'new_post';
include_once('../components/admin/footer.php');
?>
