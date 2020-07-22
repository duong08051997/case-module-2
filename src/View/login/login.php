<?php
//
//use App\Model\DBConnect;
//
//try {
//    $db = new DBConnect();
//    $conn = $db->connect();
//
//    if (isset($_POST['login'])) {
//        if (empty($_POST['username']) || empty($_POST['password'])) {
//            $message = '<label>All fields are required </label>';
//        } else {
//            $sql = "SELECT * FROM `tbl_users` WHERE `username`= :username AND `password`=:password";
//            $stmt = $conn->prepare($sql);
//            $stmt->execute(
//                ['username' => $_POST["username"],
//                    'password' => $_POST["password"]]
//
//            );
//
//            $count = $stmt->rowCount();
//            if ($count > 0) {
//                $_SESSION['username'] = $_POST['username'];
//                $_SESSION['password'] = $_POST['password'];
//                header('location:index.php');
//            } else {
//                $message = '<label>Wrong Data</label>';
//            }
//        }
//    }
//} catch (PDOException $error) {
//    $message = $error->getMessage();
//}
//?>
<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Document</title>-->
<!--</head>-->
<!--<body>-->
<?php //if (isset($message)) {
//    echo '<label class="text-danger">' . $message . '</label>';
//}
//?>
<!--<div class="container">-->
<!--    <h3>Login</h3>-->
<!--    <form method="post">-->
<!--        <input type="text" name="username">-->
<!--        <input type="password" name="password">-->
<!--        <button type="submit" name="login">login</button>-->
<!--    </form>-->
<!--</div>-->
<!--</body>-->
<!--</html>-->
<?php
session_start()
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h2>Login</h2>
    <form method="post" action="checklogin.php">
        <div class="form-group">
            <label>Name :</label>
            <input type="text" class="form-control" placeholder="Enter name" name="username">
        </div>
        <div class="form-group">
            <label>Password :</label>
            <input type="password" class="form-control" placeholder="password" name="password">
        </div>
        <button type="submit" class="btn btn-success">Sign in</button>
        <a href="register.php" class="btn btn-primary">Sign up</a>
    </form>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</html>
