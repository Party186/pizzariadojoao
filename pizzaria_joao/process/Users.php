<?php
include_once('../config.php');

if(empty($_POST['email']) && empty($_POST['password'])){
    header('Location:../public/login.php');
}

$email = $_POST['email'];
$password = $_POST['password'];
$type = $_POST['type'];

$metodo = $_SERVER["REQUEST_METHOD"];

if($metodo==="POST"){

if($type==="login"){
    $query = $conn->query("SELECT * FROM user WHERE email = '$email' AND senha  = md5($password)");
    if($query->rowCount()>0){
        $_SESSION['cliente'] = "ok";
        foreach($query as $dados){
            $_SESSION['perm'] = $dados['permissao'];
            $_SESSION['id'] = $dados['id'];
        }
        header('Location:../public/home.php');
    }else{
        $query = $conn->query("SELECT * FROM administrador WHERE email = '".$email."' AND senha  = '".$password."'");
        if($query->rowCount()>0){
            $dados = $query->fetchAll(PDO::FETCH_COLUMN, 0);
            $_SESSION['administrador']=$dados;
            header('Location:../public/dashbord.php');
        }else{
            //retorna para o login com mensagem de dados inválidos
            $_SESSION["msg"]="Dados inválidos!";
            $_SESSION["status"]="warning";
            header('Location:../public/login.php');
            
        }
    }
}
else if($type==="cadastro_cliente"){
    $query = $conn->query("SELECT * FROM user WHERE email = '".$email."'");
    if($query->rowCount()<=0){
        $query = $conn->query("INSERT INTO pizzaria.user (email, senha, permissao) VALUES ('$email', md5($password), 0)");
        //retorna para o login com mensagem de cadastro com sucesso
        $_SESSION["msg"]="Cadastrado com sucesso!";
        $_SESSION["status"]="success";
        header('Location:../public/login.php');
    }else if($query->rowCount()>0){
        //retorna para o login com mensagem de já ter cadastro
        $_SESSION["msg"]="Já possui cadastro!";
        $_SESSION["status"]="warning";
        header('Location:../public/login.php');
    }
}
}
