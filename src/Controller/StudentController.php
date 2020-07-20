<?php
namespace App\Controller;

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

}