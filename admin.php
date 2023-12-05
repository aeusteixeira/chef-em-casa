<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Incluindo o Bootstrap 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Incluindo o Font Awesome para ícones -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Dashboard do Admin</title>
</head>
<body>
    <!-- Navbar do dashboard -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Dashboard do Admin</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#"><i class="fa fa-home"></i> Início <span class="sr-only">(Página atual)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-user"></i> Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-cog"></i> Configurações</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-sign-out"></i> Sair</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Conteúdo do dashboard -->
    <div class="container">
        <div class="row">
            <!-- Sidebar do dashboard -->
            <div class="col-md-3">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active"><i class="fa fa-tachometer"></i> Dashboard</a>
                    <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-users"></i> Usuários</a>
                    <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-file"></i> Posts</a>
                    <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-comment"></i> Comentários</a>
                    <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-chart-bar"></i> Estatísticas</a>
                    <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-envelope"></i> Mensagens</a>
                </div>
            </div>
            <!-- Main do dashboard -->
            <div class="col-md-9">
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
                <div class="row">
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
            </div>
        </div>
    </div>

    <!-- Incluindo o jQuery, Popper e Bootstrap 4 -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
