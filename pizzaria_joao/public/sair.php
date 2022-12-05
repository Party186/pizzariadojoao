<?php
include_once('../config.php');
if($_SESSION['cliente']){
unset($_SESSION['cliente']);
header('Location:  login.php');
}
if($_SESSION['administrador']){
    unset($_SESSION['administrador']);
    header('Location:  login.php');
}
