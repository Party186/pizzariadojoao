<?php
session_start();
$hostDatabase = 'us-cdbr-east-06.cleardb.net';
$userDatabase = 'bed2e105106573 ';
$passwordDatabase = '3eebf0d3@us';
$nameDatabase = 'heroku_05cac61f5104f56';


try{    
    $conn=new PDO("mysql:host={$hostDatabase};dbame={$nameDatabase};",$userDatabase,$passwordDatabase);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
}catch(PDOException $e){

    echo "Erro:".$e->getMessage()."</br>";
    
}