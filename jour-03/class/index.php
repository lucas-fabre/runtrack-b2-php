<?php

require_once 'Student.php';
require_once 'Grade.php';
require_once 'Room.php';
require_once 'Floor.php';

$lucas = new Student(1, 1, 'test@test.io', 'Test Test', new Datetime('1990-01-01'), 'M');

$grade = new Grade(1, '1ère année', 1);

$room = new Room(1, 'Salle 1', 10, 'Salle de cours', 1);

$floor = new Floor(1, 'Rez-de-chaussée', 'Rez-de-chaussée');

?>