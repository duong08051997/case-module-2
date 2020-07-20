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

}