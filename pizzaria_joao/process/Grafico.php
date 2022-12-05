<?php

include_once('../config.php');
$bordaCatupiry=$conn->query("SELECT count(id) FROM pizzaria.pizzas where borda_id = 1;");
$catupiry=$bordaCatupiry->fetchAll();
foreach($catupiry as $pedido1){
    $_SESSION['bordaCatupiry'] = $pedido1['count(id)'];
}

$bordaChocolate=$conn->query("SELECT count(id) FROM pizzaria.pizzas where borda_id = 2;");
$Chocolate=$bordaChocolate->fetchAll();
foreach($Chocolate as $pedido2){
    $_SESSION['bordaChocolate'] = $pedido2['count(id)'];
}

$bordaCheddar=$conn->query("SELECT count(id) FROM pizzaria.pizzas where borda_id = 3;");
$Cheddar=$bordaCheddar->fetchAll();
foreach($Cheddar as $pedido3){
    $_SESSION['bordaCheddar'] = $pedido3['count(id)'];
}

$massaComum=$conn->query("SELECT count(id) FROM pizzaria.pizzas where massa_id = 3;");
$comum=$massaComum->fetchAll();
foreach($comum as $pedido4){
    $_SESSION['massaComum'] = $pedido4['count(id)'];
}

$massaTemperada=$conn->query("SELECT count(id) FROM pizzaria.pizzas where massa_id = 2;");
$Temperada=$massaTemperada->fetchAll();
foreach($Temperada as $pedido5){
    $_SESSION['massaTemperada'] = $pedido5['count(id)'];
}

$massaNormal=$conn->query("SELECT count(id) FROM pizzaria.pizzas where massa_id = 1;");
$Normal=$massaNormal->fetchAll();
foreach($Normal as $pedido6){
    $_SESSION['massaNormal'] = $pedido6['count(id)'];
}

$saborCalabresa=$conn->query("SELECT count(id) FROM pizzaria.pizza_sabor where sabor_id = 1;");
$Calabresa=$saborCalabresa->fetchAll();
foreach($Calabresa as $pedido7){
    $_SESSION['saborCalabresa'] = $pedido7['count(id)'];
}

$saborQueijo=$conn->query("SELECT count(id) FROM pizzaria.pizza_sabor where sabor_id = 2;");
$Queijo=$saborQueijo->fetchAll();
foreach($Queijo as $pedido8){
    $_SESSION['saborQueijo'] = $pedido8['count(id)'];
}

$saborFrango=$conn->query("SELECT count(id) FROM pizzaria.pizza_sabor where sabor_id = 3;");
$Frango=$saborFrango->fetchAll();
foreach($Frango as $pedido9){
    $_SESSION['saborFrango'] = $pedido9['count(id)'];
}

$saborLombinho=$conn->query("SELECT count(id) FROM pizzaria.pizza_sabor where sabor_id = 4;");
$Lombinho=$saborLombinho->fetchAll();
foreach($Lombinho as $pedido10){
    $_SESSION['saborLombinho'] = $pedido10['count(id)'];
}

$saborFile=$conn->query("SELECT count(id) FROM pizzaria.pizza_sabor where sabor_id = 5;");
$File=$saborFile->fetchAll();
foreach($File as $pedido11){
    $_SESSION['saborFile'] = $pedido11['count(id)'];
}

$saborMarg=$conn->query("SELECT count(id) FROM pizzaria.pizza_sabor where sabor_id = 6;");
$Marg=$saborMarg->fetchAll();
foreach($Marg as $pedido12){
    $_SESSION['saborMarg'] = $pedido12['count(id)'];
}

$saborPortuguesa=$conn->query("SELECT count(id) FROM pizzaria.pizza_sabor where sabor_id = 7;");
$Portuguesa=$saborPortuguesa->fetchAll();
foreach($Portuguesa as $pedido13){
    $_SESSION['saborPortuguesa'] = $pedido13['count(id)'];
}