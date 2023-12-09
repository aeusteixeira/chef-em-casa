<?php

include_once('helpers/database.php');

// Conexão com o banco de dados
$connection = connectDatabase();

// Pegamos o ID da URL
$post_id = $_GET['post_id'];

// Validação se não é nada malicioso
$post_id = mysqli_real_escape_string($connection, $post_id);

// Query para selecionar o post acesado
$query = "SELECT 
posts.title,
posts.content,
posts.image,
users.name as 'user_name',
users.about as 'user_about',
users.image as 'user_image',
FROM posts
JOIN users ON users.id = posts.user_id
WHERE posts.id = '$post_id'";

// Execução da query no banco
$result = mysqli_query($connection, $query);

// Veriica se retornou algo
if(mysqli_num_rows($result) > 0){
    // Transforma o resultado em um array associativo
    $row = mysqli_fetch_assoc($result);

    $title = $row['title'];
    $date = $row['created_at'];
    $content = $row['content'];
    $image = $row['image'];


}else{
    echo "Publicação não encontrada";
}

 $pageInfo = array(
  'title' => $title,
  'description' => substr($content, 0, 120),
  'pageName' => 'posts',
);

$pageName = $pageInfo['pageName'];

include_once(__DIR__ . '/components/public/header.php');
?>
<main class="container">

    <!-- Conteúdo do Post -->
    <section id="post" class="py-5">
        <div class="row">
            <div class="col-md-8 card">
                <div class="card-body">
                    <img src="<?php echo $image; ?>" class="img-fluid" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">
                    <h1 class="mt-4">
                        <?php echo $title; ?>
                    </h1>
                    <p class="text-muted">
                        <?php echo $date; ?>
                    </p>
                    <p>
                        <?php echo $content; ?>
                    </p>
                    <hr>
                    <!-- Compartilhamento nas Redes Sociais -->
                    <div class="mt-4">
                        <p>Compartilhe esta receita:</p>
                        <a href="whatsapp://send?text=Confira essa deliciosa receita de Escondidinho de Carne Seca no Chef Em Casa: [URL]"
                            class="btn btn-success" target="_blank" rel="noopener">
                            <i class="fab fa-whatsapp"></i> WhatsApp
                        </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=[URL]" class="btn btn-primary"
                            target="_blank" rel="noopener">
                            <i class="fab fa-facebook"></i> Facebook
                        </a>
                        <a href="https://twitter.com/intent/tweet?url=[URL]&text=Confira essa deliciosa receita de Escondidinho de Carne Seca no Chef Em Casa"
                            class="btn btn-info" target="_blank" rel="noopener">
                            <i class="fab fa-twitter"></i> Twitter
                        </a>
                    </div>

                    <!-- Seção sobre o Autor -->
                    <div class="mt-4">
                        <h3>Sobre o Autor</h3>
                        <div class="media">
                            <img src="https://media.licdn.com/dms/image/D4D03AQGdVJQdQIFHrA/profile-displayphoto-shrink_200_200/0/1697559933642?e=1707350400&v=beta&t=wSCj9JIHeTQIhw2mwqZEFPholUh76YocekZVGXQKZOA"
                                alt="Nome do Autor" class="mr-3 img-fluid rounded-circle" style="width: 100px;">
                            <div class="media-body">
                                <p><strong>
                                        Matheus Teixeira
                                    </strong></p>
                                <p>
                                    Graduado em Análise e Desenvolvimento de Sistemas | MBA em Inteligência Artificial
                                    para Negócios | Instrutor de Programação no SENAC | Apaixonado por Marketing Digital
                                    e Integração de Tecnologia
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Seção de Comentários -->
                    <div class="mt-4">
                        <h3>Comentários</h3>

                        <!-- Comentário 1 -->
                        <div class="media mt-4">
                            <img src="https://randomuser.me/api/portraits/men/50.jpg" class="mr-3 rounded-circle"
                                alt="Usuário 1" style="width: 50px;">
                            <div class="media-body">
                                <h5 class="mt-0">
                                    Michael Smith
                                </h5>
                                <p>Que receita incrível! Com certeza vou experimentar este final de semana. Obrigado por
                                    compartilhar!</p>
                            </div>
                        </div>

                        <!-- Comentário 2 -->
                        <div class="media mt-4">
                            <img src="https://randomuser.me/api/portraits/men/37.jpg" class="mr-3 rounded-circle"
                                alt="Usuário 2" style="width: 50px;">
                            <div class="media-body">
                                <h5 class="mt-0">
                                    João Silva
                                </h5>
                                <p>Adoro escondidinho de carne seca! Esta receita parece deliciosa. Vou adicionar à
                                    minha
                                    lista de
                                    receitas para experimentar.</p>
                            </div>
                        </div>

                        <!-- Comentário 3 -->
                        <div class="media mt-4">
                            <img src="https://randomuser.me/api/portraits/women/62.jpg" class="mr-3 rounded-circle"
                                alt="Usuário 3" style="width: 50px;">
                            <div class="media-body">
                                <h5 class="mt-0">
                                    Maria Souza
                                </h5>
                                <p>Que maravilha! Sempre estou à procura de novas receitas para testar, e esta
                                    definitivamente está na
                                    minha lista agora.</p>
                            </div>
                        </div>

                        <!-- Adicione mais comentários conforme necessário -->
                    </div>
                    <!-- Formulário de Comentários -->
                    <hr>
                    <div class="mt-4">
                        <h3>Deixe seu comentário</h3>
                        <div class="alert alert-info">
                                Você precisa estar logado para comentar. <a href="login.php">Clique aqui</a> para
                                fazer login em sua conta.
                        </div>
                        <form action="comentarios.php" method="post">
                            <div class="form-group">
                                <p>
                                    Você está logado como <strong>Matheus Teixeira</strong>.
                                </p>
                            </div>
                            <div class="form-group">
                                <label for="comentario">Comentário</label>
                                <textarea class="form-control" id="comentario" name="comentario" rows="3"
                                    placeholder="Digite seu comentário" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-color1">Enviar</button>
                        </form>
                    </div>

                </div>





            </div>
            <!-- Sidebar (pode ser adicionada mais conteúdo à direita, como posts relacionados, etc.) -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Posts Relacionados</h5>
                        <div class="row">
                            <!-- Post Relacionado 1 -->
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <img src="src/img/10-min.png" class="card-img-top" alt="Post Relacionado 1">
                                    <div class="card-body">
                                        <h6 class="card-title"><a href="#">Bolo de Cenoura com Cobertura de
                                                Chocolate</a></h6>
                                    </div>
                                </div>
                            </div>
                            <!-- Post Relacionado 2 -->
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <img src="src/img/11-min.png" class="card-img-top" alt="Post Relacionado 2">
                                    <div class="card-body">
                                        <h6 class="card-title"><a href="#">Frango Xadrez com Arroz e Legumes</a></h6>
                                    </div>
                                </div>
                            </div>
                            <!-- Post Relacionado 3 -->
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <img src="src/img/12-min.png" class="card-img-top" alt="Post Relacionado 3">
                                    <div class="card-body">
                                        <h6 class="card-title"><a href="#">Pudim de Leite Condensado</a></h6>
                                    </div>
                                </div>
                            </div>
                            <!-- Post Relacionado 4 -->
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <img src="src/img/13-min.png" class="card-img-top" alt="Post Relacionado 4">
                                    <div class="card-body">
                                        <h6 class="card-title"><a href="#">Salada de Frutas com Iogurte</a></h6>
                                    </div>
                                </div>
                            </div>
                            <!-- Adicione mais posts relacionados conforme necessário -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>