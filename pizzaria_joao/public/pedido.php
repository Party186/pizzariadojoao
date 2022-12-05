<?php
include_once('../process/Pizza.php');
include_once('./template/header.php');
if(empty($_SESSION['cliente'])){
    header('Location:../public/login.php');
}
?>
    <h1 style="margin-top: 3vw; margin-bottom:2vw; text-align: center;">Faça seu pedido</h1>
    <form action="../process/Pizza.php" method="post" class="row g-3 align-items-center" style="text-align: center;">
            <div class=".col-md-6 .offset-md-3">
                <label for="inputState" class="form-label">Borda</label>
                <select name="borda" id="inputState" class="form-select">
                <?php foreach($bordas as $borda) :?>
                    <option value="<?=$borda['id'];?>"><?=$borda['tipo']?></option>
                <?php endforeach;?>
                </select>
            </div>
            <div class=".col-md-6 .offset-md-3">
                <label for="inputState" class="form-label">Massa</label>
                <select name="massa" id="inputState" class="form-select">
                <?php foreach($massas as $massa) :?>
                    <option value="<?=$massa['id'];?>"><?=$massa['tipo']?></option>
                <?php endforeach;?>
                </select>
            </div>
            <div class=".col-md-6 .offset-md-3">
                <label for="inputState" class="form-label">Sabor</label>
                <select multiple name="sabores[]" id="inputState" class="form-select">
                <?php foreach($sabores as $sabor) :?>
                    <option value="<?=$sabor['id'];?>"><?=$sabor['nome']?></option>
                <?php endforeach;?>
                </select>
            </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Encomendar</button>
        </div>
    </form>
<?php
//include_once('./template/footer.php');?>