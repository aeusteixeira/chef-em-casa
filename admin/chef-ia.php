<?php
$pageInfo = array(
    'title' => 'Meu Chef IA',
    'description' => 'Gere receitas com os ingredientes que você tem em casa utilizando a inteligência artificial.',
    'pageName' => 'chef-ia',
);

$pageName = $pageInfo['pageName'];

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
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label for="ingredients">Ingredientes</label>
                                    <textarea name="ingredients" id="ingredients" cols="30" rows="10"
                                        class="form-control" placeholder="Digite os ingredientes da receita"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-color1 my-2 my-sm-0 text-light btn-sm">
                                        <i class="fas fa-robot"></i>
                                        Gerar Receita
                                    </button>
                                </div>
                            </form>

                            <div class="card" id="recipe" style="background-color: #00cba9">
                                <div class="card-body">
                                    <p>
                                        Primeiro comece fritando a cebola e o alho no azeite. Depois acrescente o tomate
                                        e o pimentão e deixe refogar por alguns minutos. Acrescente o frango e deixe
                                        fritar um pouco. Acrescente o arroz e deixe fritar um pouco. Acrescente a água e
                                        o caldo de galinha e deixe cozinhar até secar a água. Acrescente a ervilha e a
                                        cenoura e deixe cozinhar por alguns minutos. Desligue o fogo e acrescente a
                                        salsinha e a cebolinha. Sirva em seguida.
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-success my-2 my-sm-0 text-light btn-sm">
                                        <i class="fas fa-save"></i>
                                        Salvar Receita
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="recepies-saved mt-3">
                        <h3>Receitas Salvas</h3>
                        <div class="row">
                            <div class="col-sm-6 col-lg-4">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt in saepe harum vero repellendus corrupti consectetur maxime maiores aspernatur, a aliquam iure voluptatibus, eius accusamus totam delectus aliquid amet corporis.
                                        </p>
                                        <a href="#" class="btn btn-danger my-2 my-sm-0 text-light btn-sm">
                                            <i class="fas fa-trash"></i>
                                            Excluir
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta et consequuntur necessitatibus, atque ab repudiandae repellendus minus debitis in vitae nihil provident architecto excepturi incidunt est labore quasi mollitia molestiae?
                                        </p>
                                        <a href="#" class="btn btn-danger my-2 my-sm-0 text-light btn-sm">
                                            <i class="fas fa-trash"></i>
                                            Excluir
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <p class="card-text">
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos culpa autem voluptate fugiat odio nam neque id consequatur, nihil eaque aspernatur expedita, tempore ullam debitis, tenetur rem aliquam consequuntur nobis.
                                        </p>
                                        <a href="#" class="btn btn-danger my-2 my-sm-0 text-light btn-sm">
                                            <i class="fas fa-trash"></i>
                                            Excluir
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        </section>
    </div>
</main>

<?php
$currentPage = 'chef-ia';
include_once('../components/admin/footer.php');
?>