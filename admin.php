<?php
session_start();
require __DIR__ . "/vendor/autoload.php";
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : "";
if (isset($_SESSION['username'])  && $_SESSION['password']){
    include 'index.php';
}else{
    include ('src/View/login/login.php');
}
