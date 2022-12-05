<?php

include_once('../config.php');

$metodo = $_SERVER["REQUEST_METHOD"];


if($metodo==="GET"){

    $pedidosQuery=$conn->query("SELECT * FROM pizzaria.pedidos;");
    $pedidos=$pedidosQuery->fetchAll();

    $pizzas=[];

    foreach($pedidos as $pedido){

        $pizza=[];

        $pizza["id"]= $pedido["pizza_id"];

        $pizzaQuery=$conn->query("SELECT*FROM pizzaria.pizzas WHERE id=".$pizza['id']."");

        $pizzaData=$pizzaQuery->fetch(PDO::FETCH_ASSOC);


        $bordaQuery=$conn->query("SELECT*FROM pizzaria.bordas WHERE id=".$pizzaData['borda_id']."");

        $borda=$bordaQuery->fetch(PDO::FETCH_ASSOC);

        $pizza["borda"]=$borda["tipo"];


        $massaQuery=$conn->query("SELECT*FROM pizzaria.massas WHERE id=".$pizzaData['massa_id']."");

        $massa=$massaQuery->fetch(PDO::FETCH_ASSOC);

        $pizza["massa"]=$massa["tipo"];

        $saboresQuery=$conn->query("SELECT*FROM pizzaria.pizza_sabor WHERE pizza_id=".$pizza['id']."");

        $sabores=$saboresQuery->fetchAll(PDO::FETCH_ASSOC);


        $saboresDaPizza=[];

        $saborQuery=$conn->prepare("SELECT * FROM pizzaria.sabores   WHERE id=:sabor_id;");

        foreach($sabores as $sabor){
            $saborQuery->bindParam(":sabor_id", $sabor["sabor_id"]);
            $saborQuery->execute();

            $saborPizza=$saborQuery->fetch(PDO::FETCH_ASSOC);

            array_push($saboresDaPizza, $saborPizza["nome"]);
        }

        $pizza["sabores"]=$saboresDaPizza;

        $pizza["status"]=$pedido["status_id"];

        array_push($pizzas, $pizza);


    }


    $statusQuery=$conn->query("SELECT*FROM pizzaria.status;");
    $status=$statusQuery->fetchAll();



}else if($metodo==="POST"){

    $type=$_POST["type"];

    if($type === "delete"){
        $pizzaId= $_POST["id"];

        $deleteQuery=$conn->query("DELETE FROM pizzaria.pedidos WHERE pizza_id=".$pizzaId."");

        $_SESSION["msg"]="Pedido removido com sucesso!";
        $_SESSION["status"]="success";

    }else if($type==="update"){
        $pizzaId= $_POST["id"];
        $statusId=$_POST["status"];

        $updateQuery=$conn->query("UPDATE pizzaria.pedidos SET status_id=".$statusId." WHERE pizza_id=".$pizzaId.";");

        $_SESSION["msg"]="Pedido atualizado com sucesso!";
        $_SESSION["status"]="success";
    }

    header("Location:../public/dashbord.php");
}   
?>