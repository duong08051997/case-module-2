<?php


namespace App\Model;


class UserDB
{
    protected $userDatabase;

    public function __construct()
    {
        $db = new DBConnect();
        $this->userDatabase = $db->connect();
    }

    public function getUser($username, $password)
    {
        $sql = "SELECT * FROM tbl_users WHERE username= :username AND password= :password";
        $stmt = $this->userDatabase->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        $item = $stmt->fetch();
        return $item;
    }

    public function add($name,$pass){
        $sql= "INSERT INTO `tbl_users`(userName, `password`) VALUES (?, ?)";
        $stmt= $this->userDatabase->prepare($sql);
        $stmt->bindParam(1,$name);
        $stmt->bindParam(2,$pass);
        $stmt->execute();

    }
}
