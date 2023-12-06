<?php

$pageInfo = array(
    'title' => 'Dashboard',
    'description' => 'Visualize as estatísticas do site.',
    'pageName' => 'index',
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
                <div class="row">
                    <!-- Card 1 -->
                    <div class="col-md-4">
                        <div class="card text-white bg-primary mb-3">
                            <div class="card-header"><i class="fa fa-users"></i> Usuários</div>
                            <div class="card-body">
                                <h5 class="card-title">150</h5>
                                <p class="card-text">Usuários cadastrados no site.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="col-md-4">
                        <div class="card text-white bg-success mb-3">
                            <div class="card-header"><i class="fa fa-file"></i> Posts</div>
                            <div class="card-body">
                                <h5 class="card-title">50</h5>
                                <p class="card-text">Posts publicados no site.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="col-md-4">
                        <div class="card text-white bg-danger mb-3">
                            <div class="card-header"><i class="fa fa-comment"></i> Comentários</div>
                            <div class="card-body">
                                <h5 class="card-title">100</h5>
                                <p class="card-text">Comentários feitos no site.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Gráfico 1 -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header"><i class="fa fa-chart-bar"></i> Estatísticas de Usuários</div>
                            <div class="card-body">
                                <!-- Aqui você pode inserir um gráfico usando uma biblioteca como Chart.js -->
                            </div>
                        </div>
                    </div>
                    <!-- Gráfico 2 -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header"><i class="fa fa-chart-bar"></i> Estatísticas de Posts</div>
                            <div class="card-body">
                                <!-- Aqui você pode inserir um gráfico usando uma biblioteca como Chart.js -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-3">
                    <!-- Tabela 1 -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header"><i class="fa fa-users"></i> Últimos Usuários Cadastrados</div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>E-mail</th>
                                            <th>Data</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>João Silva</td>
                                            <td>joao@gmail.com</td>
                                            <td>01/01/2023</td>
                                        </tr>
                                        <tr>
                                            <td>Maria Santos</td>
                                            <td>maria@gmail.com</td>
                                            <td>02/01/2023</td>
                                        </tr>
                                        <tr>
                                            <td>Pedro Oliveira</td>
                                            <td>pedro@gmail.com</td>
                                            <td>03/01/2023</td>
                                        </tr>
                                        <!-- Adicione mais linhas conforme necessário -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Tabela 2 -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header"><i class="fa fa-file"></i> Últimos Posts Publicados</div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Título</th>
                                            <th>Autor</th>
                                            <th>Data</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Como fazer um dashboard com Bootstrap</td>
                                            <td>João Silva</td>
                                            <td>01/01/2023</td>
                                        </tr>
                                        <tr>
                                            <td>Os melhores frameworks para web</td>
                                            <td>Maria Santos</td>
                                            <td>02/01/2023</td>
                                        </tr>
                                        <tr>
                                            <td>Bootstrap 4: o que há de novo?</td>
                                            <td>Pedro Oliveira</td>
                                            <td>03/01/2023</td>
                                        </tr>
                                        <!-- Adicione mais linhas conforme necessário -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</section>
        </div>
</main>

<?php
  $currentPage = 'index';
  include_once('../components/admin/footer.php');

?>
