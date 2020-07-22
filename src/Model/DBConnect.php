<?php

namespace App\Model;

use Exception;
use PDO;

class DBConnect
{
    protected $dsn;
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->dsn = 'mysql:host=localhost;dbname=case_module_2;charset=utf8';
        $this->username = "root";
        $this->password = "123456@Abc";
    }

    public function connect()
    {
        try {
            return new PDO($this->dsn, $this->username, $this->password);
        } catch (Exception $e) {
            echo "lỗi: ", $e->getMessage(), "\n";
        }

    }

}
