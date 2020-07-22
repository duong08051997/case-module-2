<?php
session_start();
require __DIR__ . "/vendor/autoload.php";

use App\Controller\ClassController;
use App\Controller\ScoreController;
use App\Controller\StudentController;
use App\Middleware\Authentication;

require __DIR__ . "/vendor/autoload.php";

$auth = new Authentication();
$auth->isLogin();

$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : "";

$studentController = new StudentController();
$classController = new ClassController();
$scoreController = new ScoreController();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <div>
        <?php
        include('src/View/Menu/menu.php');
        ?>
    </div>
    <div class="pt-3">
        <?php
        switch ($page) {
            case 'list-student':
                $studentController->getAllStudent();
                break;
            case 'add-student':
                $studentController->addStudent();
                break;
            case 'delete-student':
                $studentController->delete();
                break;
            case 'update-student':
                $studentController->updateStudent();
                break;
            case 'search-student':
                $studentController->search();
                break;
            case 'list-class':
                $classController->getAllClass();
                break;
            case 'add-class':
                $classController->addClass();
                break;
            case 'update-class':
                $classController->updateClass();
                break;
            case 'delete-class':
                $classController->deleteClass();
                break;
            case 'list-score':
                $scoreController->getAllScore();
                break;
            case 'add-score':
                $scoreController->addScore();
                break;
            case 'delete-score':
                $scoreController->deleteScore();
                break;
            case 'update-score':
                $scoreController->updateScore();
                break;
            default:
                $classController->getAllClass();
        }

        ?>

    </div>

</div>


</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</html>
