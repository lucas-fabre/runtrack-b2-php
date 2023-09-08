<?php

class Room {

    private $id;
    private $name;
    private $capacity;
    private $description;
    private $floor;

    public function __construct($RoomId, $RoomName, $RoomCapacity, $RoomDescription, $RoomFloor) {
        $this-> id = $RoomId;
        $this-> name = $RoomName;
        $this-> capacity = $RoomCapacity;
        $this-> description = $RoomDescription;
        $this-> floor = $RoomFloor;
    }

    public function getRoomId(): ?string {
        return $this-> id;
    }

    public function setRoomId($RoomId) {
        $this-> id = $RoomId;
    }

    public function getRoomName(): ?string {
        return $this-> name;
    }

    public function setRoomName($RoomName) {
        $this-> name = $RoomName;
    }

    public function getRoomCapacity(): ?string {
        return $this-> capacity;
    }

    public function setRoomCapacity($RoomCapacity) {
        $this-> capacity = $RoomCapacity;
    }

    public function getRoomDescription(): ?string {
        return $this-> description;
    }

    public function setRoomDescription($RoomDescription) {
        $this-> description = $RoomDescription;
    }

    public function getRoomFloor(): ?string {
        return $this-> floor;
    }

    public function setRoomFloor($RoomFloor) {
        $this-> floor = $RoomFloor;
    }
}

?>