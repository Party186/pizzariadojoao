<?php
include_once('./template/header.php');
include_once('../process/Pedidos.php');
if($_SESSION['perm']!=1){
    header('Location:../public/login.php');
}
?>

<div id="main-container" style="margin-top:15vh;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Gereciar Pedidos:</h2>
            </div>
            <div class="col-md-12 table-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"><span>Pedido</span>#</th>
                            <th scope="col">Borda</th>
                            <th scope="col">Massa</th>
                            <th scope="col">Sabores</th>
                            <th scope="col">Status</th>
                            <th scope="col">Ações</th>
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
                                <form action="../process/Pedidos.php" method="POST" class="form-group update-form">
                                    <input type="hidden" name="type" value="update">
                                    <input type="hidden" name="id" value="<?=$pizza["id"];?>">
                                    <select name="status" class="form-control status-input">
                                        <?php foreach($status as $s):?>
                                            <option value="<?=$s["id"];?>" <?php if($s["id"]==$pizza["status"]); ?>><?=utf8_encode($s["tipo"]);?></option>
                                        <?php endforeach;?>
                                    </select>
                                    <button type="submit" class="update-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
                                    <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"/>
                                    <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"/>
                                    </svg>
                                    </button>
                                </form>
                            </td>
                            <td>
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
                            </td>
                        </tr>

                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php