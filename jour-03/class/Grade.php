<?php

class Grade {

    private $id;
    private $name;
    private $level;

    public function __construct($GradeId, $GradeName, $GradeLevel) {
        $this-> id = $GradeId;
        $this-> name = $GradeName;
        $this-> level = $GradeLevel;
    }

    public function getGradeId(): ?string {
        return $this-> id;
    }

    public function setGradeId($GradeId) {
        $this-> id = $GradeId;
    }

    public function getGradeName(): ?string {
        return $this-> name;
    }

    public function setGradeName($GradeName) {
        $this-> name = $GradeName;
    }

    public function getGradeLevel(): ?string {
        return $this-> level;
    }

    public function setGradeLevel($GradeLevel) {
        $this-> level = $GradeLevel;
    }
}
?>