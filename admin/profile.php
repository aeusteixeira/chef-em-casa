<?php
$pageInfo = array(
    'title' => 'Meu Perfil',
    'description' => 'Visualize e gerencie suas informações de perfil.',
    'pageName' => 'profile',
);

include_once('../components/admin/header.php');

$user_id = $_SESSION['user_id'];

// Busca as informações do usuário logado no banco de dados
$query = "SELECT * FROM users WHERE id = '$user_id'";
$result = mysqli_query($connection, $query);

// Verifica se a consulta retornou algum resultado
if (mysqli_num_rows($result) > 0) {
    // Transforma o resultado em um array associativo
    $user = mysqli_fetch_assoc($result);

    // Atribui os valores do array às variáveis
    $name = $user['name'];
    $email = $user['email'];
    $about = $user['about'];
    $image = $user['image'];

} else {
    // Redireciona para a página de login
    header('Location: login.php');
    exit;
}


?>

<!-- Conteúdo da página de perfil -->
<main class="container py-5">

    <div class="row">
        <!-- Informações do perfil -->
        <section class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <?php
                        // Verifica se a imagem do perfil contém o valor src 
                        // (ou seja, se o usuário já fez upload de uma imagem)

                        // Corrigido o caminho da imagem
                        if (strpos($image, 'src') !== false) {
                            $image = $image;
                    ?>
                    <img src="../<?php echo $image ?>" class="img-fluid mb-3" alt="<?php echo $name ?>">
                    <?php } else { ?>
                    <img src="<?php echo $image ?>" class="img-fluid mb-3" alt="<?php echo $name ?>">
                    <?php } ?>
                    <h5>
                        <?php echo $name ?>
                    </h5>
                    <p>
                        <?php echo $about ?>
                    </p>
                    <p>
                        <?php echo $email ?>
                    </p>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <form action="requests/profile/update.php" method="post" enctype="multipart/form-data">
                    <?php if(isset($_SESSION['login_error'])){ ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $_SESSION['login_error']; ?>
                        </div>
                    <?php unset($_SESSION['login_error']); } ?>
                        <div class="form-group">
                            <label for="image">Foto de Perfil</label>
                            <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
                            <input type="hidden" name="actual_image" value="<?php echo $image ?>">
                        </div>
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" class="form-control" id="name" value="<?php echo $name ?>" required
                                name="name">
                        </div>
                        <div class="form-group">
                            <label for="about">Sobre</label>
                            <textarea class="form-control" id="about" rows="10" required
                                name="about"><?php echo $about ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="email">Endereço de Email</label>
                            <input type="email" class="form-control" id="email" value="<?php echo $email ?>"
                                name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Nova Senha</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="form-group">
                            <label for="password-confirm">Confirme a Nova Senha</label>
                            <input type="password" class="form-control" id="password-confirm" name="password_confirm">
                        </div>

                        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                    </form>
                </div>
            </div>
        </section>

        <!-- Publicações e Comentários -->
        <section class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <!-- Tabs para Comentários e Curtidas -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="comentarios-tab" data-toggle="tab"
                                data-target="#comentarios" type="button" role="tab" aria-controls="comentarios"
                                aria-selected="true">
                                Meus Comentários
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="curtidas-tab" data-toggle="tab" data-target="#curtidas"
                                type="button" role="tab" aria-controls="curtidas" aria-selected="false">
                                Minhas Curtidas
                            </button>
                        </li>
                    </ul>

                    <!-- Conteúdo das Tabs -->
                    <div class="tab-content" id="myTabContent">
                        <!-- Tab de Comentários -->
                        <div class="tab-pane fade show active" id="comentarios" role="tabpanel"
                            aria-labelledby="comentarios-tab">
                            <!-- Exemplo de Comentários -->
                            <div class="media mb-3">
                                <img src="path/to/fake-profile-image.jpg" class="mr-3 rounded-circle"
                                    alt="Foto de Perfil">
                                <div class="media-body">
                                    <h5 class="mt-0">Usuário Exemplo</h5>
                                    <p>Comentário exemplo 1. <i class="far fa-thumbs-up"></i> 5 curtidas</p>
                                </div>
                            </div>

                            <div class="media">
                                <img src="path/to/fake-profile-image.jpg" class="mr-3 rounded-circle"
                                    alt="Foto de Perfil">
                                <div class="media-body">
                                    <h5 class="mt-0">Outro Usuário</h5>
                                    <p>Comentário exemplo 2. <i class="far fa-thumbs-up"></i> 10 curtidas</p>
                                </div>
                            </div>
                        </div>

                        <!-- Tab de Curtidas -->
                        <div class="tab-pane fade" id="curtidas" role="tabpanel" aria-labelledby="curtidas-tab">
                            <!-- Exemplo de Curtidas -->
                            <div class="media mb-3">
                                <img src="path/to/fake-profile-image.jpg" class="mr-3 rounded-circle"
                                    alt="Foto de Perfil">
                                <div class="media-body">
                                    <h5 class="mt-0">Usuário Exemplo</h5>
                                    <p>Curtiu a publicação: Título da Publicação 1</p>
                                </div>
                            </div>

                            <div class="media">
                                <img src="path/to/fake-profile-image.jpg" class="mr-3 rounded-circle"
                                    alt="Foto de Perfil">
                                <div class="media-body">
                                    <h5 class="mt-0">Outro Usuário</h5>
                                    <p>Curtiu a publicação: Título da Publicação 2</p>
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
$currentPage = 'index';
include_once('../components/admin/footer.php');
?>