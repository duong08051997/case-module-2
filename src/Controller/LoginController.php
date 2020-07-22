<?php


namespace App\Controller;


use App\Model\UserDB;

class LoginController
{
    protected $userDB;

    public function __construct()
    {
        $this->userDB = new UserDB();
    }

    public function login($username, $password)
    {
        $result = $this->userDB->getUser($username, $password);
        if (is_array($result)) {
            $_SESSION['isLogin'] = true;
            $_SESSION['userLogin'] = $result;
            header('location: ../../../index.php');
        } else {
            header('location:login.php');
        }
    }

    public function logout()
    {
        session_destroy();
        header('location:login.php');
    }

    public function addUser()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_REQUEST["username"];
            $pass = $_REQUEST["password"];
            $this->userDB->add($name, $pass);
            header('location:login.php');
        }
    }
}
