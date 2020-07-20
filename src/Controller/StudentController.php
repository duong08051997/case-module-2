<?php
namespace App\Controller;

use App\Model\Student;
use App\Model\StudentManager;

class StudentController
{
    protected $studentController;
    public function __construct()
    {
        $this->studentController = new StudentManager();
    }
    public function getAllStudent()
    {
        $students = $this->studentController->getAllStudent();
        include ('src/View/Student/list.php');
    }
    public function addStudent()
    {
        if ($_SERVER['REQUEST_METHOD'] =="GET") {
            include ('src/View/Student/add.php');
        }else{
            $name = $_REQUEST['name'];
            $age = $_REQUEST['age'];
            $gender = $_REQUEST['gender'];
            $address = $_REQUEST['address'];
            $email = $_REQUEST['email'];
            $student = new Student($name,$age,$gender,$address,$email);
            $this->studentController->addStudent($student);
            header('location:index.php');
        }

    }

}