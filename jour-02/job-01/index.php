<?php

session_start();

$db = new PDO('mysql:host=localhost;dbname=lp_official', 'root', '');

function find_all_students($db) : array {
    $request = $db->prepare('SELECT * FROM students');
    $request->execute();
    return $request->fetchall();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <thead>
            <th>id</th>
            <th>grade_id</th>
            <th>email</th>
            <th>fullname</th>
            <th>birthdate</th>
            <th>gender</th>
        </thead>
        <tbody>
            <?php
                if(is_array($request)){
                    foreach($request as $data){
                        <tr>
                            <td><?php echo $data['id']; ?></td>
                            <td><?php echo $data['grade_id']; ?></td>
                            <td><?php echo $data['email']; ?></td>
                            <td><?php echo $data['fullname']; ?></td>
                            <td><?php echo $data['birthdate']; ?></td>
                            <td><?php echo $data['gender']; ?></td>  
                        </tr>
                    }
                }
            ?>
        </tbody>
    </div>
</body>
</html>