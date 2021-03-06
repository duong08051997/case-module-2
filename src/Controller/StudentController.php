<?php

namespace App\Controller;

use App\Model\ClassManager;
use App\Model\Student;
use App\Model\StudentManager;

class StudentController
{
    protected $studentController;
    protected $classManager;

    public function __construct()
    {
        $this->studentController = new StudentManager();
        $this->classManager = new ClassManager();
    }

    public function getAllStudent()
    {
        $class_id = $_REQUEST['class_id'];
        $class= $this->classManager->getClassId($class_id);
        $students=$this->studentController->getAllStudent($class_id);
        include('src/View/Student/list.php');
    }

    public function addStudent()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $id = $_REQUEST['id'];
            $class = $this->classManager->getClassId($id);
            include('src/View/Student/add.php');
        } else {

            $id = $_REQUEST['id'];
            $class = $this->classManager->getClassId($id);
            $name = $_REQUEST['name'];
            $age = $_REQUEST['age'];
            $gender = $_REQUEST['gender'];
            $address = $_REQUEST['address'];
            $email = $_REQUEST['email'];
            $class_id = $class['id'];
            $student = new Student($name, $age, $gender, $address, $email, $class_id);
            $this->studentController->addStudent($student);
            header("location:index.php?page=list-student&class_id=$class_id");
        }
    }

    public function updateStudent()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $id = $_REQUEST['id'];
            $student = $this->studentController->getId($id);
            include('src/View/Student/update.php');
        } else {

            $id = $_REQUEST['id'];
            $name = $_REQUEST['name'];
            $age = $_REQUEST['age'];
            $gender = $_REQUEST['gender'];
            $address = $_REQUEST['address'];
            $email = $_REQUEST['email'];
            $class_id = $_REQUEST['class_id'];

            $student = new Student($name, $age, $gender, $address, $email, $class_id);
            $student->setId($id);
            $this->studentController->updateStudent($student);
            header("location:index.php?page=list-student&class_id=$class_id");
        }
    }

    public function delete()
    {
        $id = $_REQUEST['id'];
        $this->studentController->delete($id);
        header("location:index.php?page=list-student&class_id=$id");
    }
    function search(){
        if ($_SERVER['REQUEST_METHOD']=='POST'){
            $keyword = $_POST['keyword'];
            $students = $this->studentController->search($keyword);
            include_once 'src/View/Student/list.php';
        }
    }

}