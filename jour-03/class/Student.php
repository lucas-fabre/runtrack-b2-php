<?php

class Student {

    private $id;
    private $grade_id;
    private $email;
    private $fullname;
    private $birthdate;
    private $gender;

    public function __construct($StudentId, $StudentGradeId, $StudentEmail, $StudentFullname, $StudentBirth, $Studentgender) {
        $this-> id = $StudentId;
        $this-> grade_id = $StudentGradeId;
        $this-> email = $StudentEmail;
        $this-> fullname = $StudentFullname;
        $this-> birthdate = $StudentBirth;
        $this-> gender = $Studentgender;
    }

    public function getStudentId(): ?string{
        return $this-> id;
    }

    public function setStudentId($StudentId) {
        $this-> id = $StudentId;
    }

    public function getStudentGradeId(): ?string {
        return $this-> grade_id;
    }

    public function setStudentGradeId($StudentGradeId) {
        $this-> grade_id = $StudentGradeId;
    }

    public function getStudentEmail(): ?string {
        return $this-> email;
    }

    public function setStudentEmail($StudentEmail) {
        $this-> email = $StudentEmail;
    }

    public function getStudentFullname(): ?string {
        return $this-> fullname;
    }

    public function setStudentFullname($StudentFullname) {
        $this-> fullname = $StudentFullname;
    }

    public function getStudentBirth(): ?string {
        return $this-> birthdate;
    }

    public function setStudentBirth($StudentBirth) {
        $this-> birthdate = $StudentBirth;
    }

    public function getStudentGender(): ?string {
        return $this-> gender;
    }

    public function setStudentGender($StudentGender) {
        $this-> gender = $StudentGender;
    }
}