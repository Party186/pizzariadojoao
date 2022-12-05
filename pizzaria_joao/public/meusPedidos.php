<?php
include_once('./template/header.php');
include_once('../process/MeusPedidos.php');
?>
<h1 style="text-align: center; margin-top: 3vw; margin-bottom: 2vw;">Seus pedidos</h1>
<table class="table justify-content-center">
  <thead>
    <tr>
      <th scope="col">Numero do Pedido</th>
      <th scope="col">Borda</th>
      <th scope="col">Massa</th>
      <th scope="col">Sabores</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($pizzas as $pizza):?>

<tr>
    <td><?=$pizza["id"];?></td>
    <td><?=$pizza["borda"];?></td>
    <td><?=$pizza["massa"];?></td>
    <td>
        <ul>
            <?php foreach($pizza["sabores"] as $sabor):?>

                <li><?=utf8_encode($sabor);?></li>
            <?php endforeach;?>
        </ul>
    </td>
    <td>
        <?php if($pizza["status"] == 1){
            echo "Em preparo";
        }else if($pizza["status"] == 2){
            echo "pronto";
        }else{
            echo "pendente";
        }
        ?>
    </td>
    <td>
    <?php
    if($pizza["status"] == 1){
        echo "O pedido não pode mais ser cancelado";
    }elseif($pizza["status"] == 2){
        echo "O pedido deve ser retirado no balcão";
    }
    else{
    ?>
    <form action="../process/Pedidos.php" method="POST">
            <input type="hidden" name="type" value="delete">
            <input type="hidden" name="id" value="<?=$pizza["id"]?>">
            <button type="submit" class="delete-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
            </svg>
            </button>
    </form>
    <?php } ?>
    </td>
</tr>

<?php endforeach;?>
  </tbody>
</table>