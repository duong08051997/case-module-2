<?php


namespace App\Model;


class StudentManager
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAllStudent()
    {
        $sql = "SELECT * FROM tbl_students";
        $stmt = $this->database->query($sql);
        $data = $stmt->fetchAll();
        $students = [];
        foreach ($data as $item) {
            $student = new Student($item['name'], $item['age'], $item['gender'], $item['address'], $item['email']);
            array_push($students, $student);
        }
        return $students;
    }
    public function addStudent($student)
    {
        $sql = "INSERT INTO tbl_students( `name`, `age`, `gender`, `address`, `email`) VALUES (:name ,:age, :gender, :address, :email)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":name",$student->getName());
        $stmt->bindParam(":age",$student->getAge());
        $stmt->bindParam(":gender",$student->getGender());
        $stmt->bindParam(":address",$student->getAddress());
        $stmt->bindParam(":email",$student->getEmail());
        $stmt->execute();
    }
    public function delete($id)
    {
        $sql = "DELETE FROM tbl_student WHERE student_id = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id",$id);
        $stmt->execute();

    }

}