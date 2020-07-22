<?php
session_start();
require '../../../vendor/autoload.php';

use App\Controller\LoginController;

$controller = new LoginController();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];
    $controller->login($username, $password);
} else {
    $controller->logout();
}

