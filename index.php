<?php
  $currentPage = 'index';
  include_once(__DIR__ . '/components/header.php');
?>
<main class="">
<section id="carrousel">
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="src/img/10-min.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="src/img/11-min.png" d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="src/img/12-min.png" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>
</section>
  <section id="about" class="container py-5">
    <div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6">
      <img src="src/img/logo.png" alt="">
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6">
      <h1>
        Chef Em Casa - Inspire-se na Culinária em Comunidade
      </h1>
      <p>
        Bem-vindo ao Chef Em Casa, o seu destino online para explorar, criar e compartilhar experiências culinárias
        únicas. Descubra receitas deliciosas, compartilhe suas próprias criações e conecte-se com uma comunidade
        apaixonada por culinária. Seja você um chef experiente ou alguém apenas começando sua jornada na cozinha, aqui
        você encontrará inspiração para cada paladar.
      </p>
    </div>
    </div>
  </section>
  <section id="features" class=" features py-5">
    <div class="container">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
      <div class="col mb-4">
        <div class="card h-100">
          <div class="card-body">
            <h5 class="card-title">Explore Receitas Variadas</h5>
            <p class="card-text">Navegue por uma ampla variedade de receitas, desde pratos clássicos até criações
              inovadoras. Encontre a inspiração certa para a sua próxima refeição.</p>
          </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card h-100">
          <div class="card-body">
            <h5 class="card-title">Compartilhe suas Receitas</h5>
            <p class="card-text">Torne-se um chef em destaque compartilhando suas próprias receitas exclusivas. Faça
              parte da comunidade Chef Em Casa e inspire outros amantes da culinária.</p>
          </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card h-100">
          <div class="card-body">
            <h5 class="card-title">Interação Comunitária</h5>
            <p class="card-text">Comente, curta e compartilhe suas impressões sobre as receitas de outros chefs. Explore
              fóruns e grupos temáticos para dicas e truques culinários.</p>
          </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card h-100">
          <div class="card-body">
            <h5 class="card-title">Junte-se a Nós</h5>
            <p class="card-text">Registre-se agora para criar seu perfil personalizado, salvar suas receitas favoritas e
              participar ativamente da comunidade Chef Em Casa. Transforme sua paixão pela culinária em uma jornada
              compartilhada de descobertas e sabores.</p>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
</main>

<?php
  include_once(__DIR__ . '/components/footer.php');
?>