<?php

class Floor {

    private $id;
    private $name;
    private $description;

    public function __construct($FloorId, $FloorName, $FloorDescription) {
        $this-> id = $FloorId;
        $this-> name = $FloorName;
        $this-> description = $FloorDescription;
    }

    public function getFloorId(): ?string {
        return $this-> id;
    }

    public function setFloorId($FloorId) {
        $this-> id = $FloorId;
    }

    public function getFloorName(): ?string {
        return $this-> name;
    }

    public function setFloorName($FloorName) {
        $this-> name = $FloorName;
    }

    public function getFloorDescription(): ?string {
        return $this-> description;
    }

    public function setFloorDescription($FloorDescription) {
        $this-> description = $FloorDescription;
    }
}
?>