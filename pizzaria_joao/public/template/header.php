<?php
include_once('../config.php');
$msg="";
if(isset($_SESSION["msg"])){

  $msg=$_SESSION["msg"];
  $status=$_SESSION["status"];

  $_SESSION["msg"]= "";
  $_SESSION["status"]="";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Pizzaria</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShg5vncbPnOu4jw4Rb7ICC2jugh_CPk6NB0tkefrNoGOJEIMdfUgwi016X6Pz-OCysO2E&usqp=CAU" alt="Logo" width="50" height="34" class="d-inline-block align-text-top">
      Pizzaria
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Pizzaria</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pedido.php">Fazer pedido</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="meusPedidos.php">Meus pedidos</a>
          </li>
          <?php if($_SESSION['perm'] == 1){
            
          ?>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="dashbord.php">Gerenciar Pedidos (ADM)</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="grafico.php">DashBoard (ADM)</a>
            </li>
          <?php } ?>
          <li class="nav-item">
            <a class="nav-link" href="cardapio.php">Cardápio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sair.php">Sair</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<br>
<br>
<?php if($msg!=""):?>
    <div class="alert alert-<?=$status?>">
    <p><?=$msg?></p>
    </div>
<?php endif;