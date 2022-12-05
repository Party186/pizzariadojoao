<?php
include_once('../config.php');
include_once('./template/header.php');
if(empty($_SESSION['cliente'])){
  header('Location:../public/login.php');
} 
?>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="height: 70%;">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://static.phdvasia.com/br/menu/combo/desktop_thumbnail_09b9540b-cac8-4d4d-a911-1f4084badb84.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://static.phdvasia.com/br/menu/combo/desktop_thumbnail_ebf84fa8-bad3-4562-97dd-f6f40eda98c9.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<h2 style="text-align: center; margin-top: 2vw; margin-bottom: 2vw; font-family: Courier New, monospace;">Veja mais sobre nós</h2>
<div class="card-group" style="margin-bottom: 4vw;">
  <div class="card">
    <img src="https://pastapizza.com.br/wp-content/uploads/2017/07/Pizza-Pizzaria-Forno-Forza-Express.jpg" class="card-img-top" style="height: 20vw;" alt="...">
    <div class="card-body">
      <h5 class="card-title">Nossas pizzas</h5>
      <p class="card-text">As melhores massas e recheios você encontra aqui, venha dar uma olhada no que estamos dispostos a oferecer!</p>
      <a href="cardapio.php"><button type="button" class="btn btn-dark">Ver cardápio</button></a>
    </div>
  </div>
  <div class="card">
    <img src="https://img.freepik.com/psd-gratuitas/menu-de-comida-e-modelo-de-banner-de-midia-social-de-pizza-deliciosa_106176-362.jpg?w=826&t=st=1669568000~exp=1669568600~hmac=166f6564825d2dd840cf5978b7579766719f21e2ff6066f82656977fdd92b906" style="height: 20vw;" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Veja nossos combos</h5>
      <p class="card-text">Aproveite os melhores preços com combos excelentes para completar seu dia!</p>
      <a href="cardapio.php"><button type="button" class="btn btn-dark">Ver combos</button></a>
    </div>
  </div>
  <div class="card">
    <img src="https://media-cdn.tripadvisor.com/media/photo-s/10/b8/35/f4/margherita-pizza-with.jpg" class="card-img-top" style="height: 20vw;" alt="...">
    <div class="card-body">
      <h5 class="card-title">Faça seu pedido</h5>
      <p class="card-text">Peça agora sua pizza e aproveite nosso vasto cardápio de sabores incríveis!</p>
      <a href="pedido.php"><button type="button" class="btn btn-dark">Realizar pedido</button></a>
    </div>
  </div>
</div>
<?php
include_once('./template/footer.php');
    