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
<?php if($msg!=""):?>
    <div class="alert alert-<?=$status?>">
    <p><?=$msg?></p>
    </div>
<?php endif;?>
    <div class="container text-center" style="margin-top: 15vw; margin-bottom: 14vw;">
    <div class="row align-items-center">
        <div class="col">
        <h1>Seja bem-vindo a nossa pizzaria!</h1>
        <br>
        <h5>Faça seu pedido a qualquer momento e aproveite nossas promoções</h5>
        </div>
        <div class="col">

        </div>
        <div class="col" style="background-color: rgba(0, 0, 0, 0.527); color:white; border-radius:10px;">
        <form action="../process/Users.php" method="post">
            <h2 style="margin-bottom: 2vw;">Faça seu cadastro</h2>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Usuário</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Senha</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <a href="login.php">Já possui uma conta?</a>
        </div>
        <input type="hidden" name="type" value="cadastro_cliente">
        <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
        </div>
    </div>
    </div>
</body>
</html>