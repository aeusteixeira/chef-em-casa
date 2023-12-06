<?php
$pageInfo = array(
    'title' => 'Minhas Postagens',
    'description' => 'Visualize e gerencie suas postagens.',
    'pageName' => 'posts',
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
            <a href="create_post.php" class="btn btn-success my-2 my-sm-0 text-light">
                Criar nova postagem
            </a>
            <hr>
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Título</th>
                                <th>Descrição</th>
                                <th>Data de Publicação</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Receita de Massa</td>
                                <td>Uma deliciosa receita de massa caseira.</td>
                                <td>01/01/2023</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Ações
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">
                                                <i class="fas fa-edit"></i>
                                                Editar
                                            </a>
                                            <a class="dropdown-item text-danger" href="#">
                                                <i class="fas fa-trash"></i>
                                                Excluir
                                            </a>
                                            <a class="dropdown-item" href="#" target="_blank">
                                                <i class="fas fa-eye"></i>
                                                Ver no Blog
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <!-- Adicione mais linhas conforme necessário -->
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</main>

<?php
$currentPage = 'index';
include_once('../components/admin/footer.php');
?>
