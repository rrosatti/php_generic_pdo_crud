<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require './Connection.php';
        require './MuscleGroup.php';
        $conn = new Connection("localhost", "gym", "root", "");
        $muscleGroup = new MuscleGroup();
        $muscleGroup->setConn($conn);
        $muscleGroup->showAllMuscleGroups();
        //echo $conn->getConn();
        ?>
    </body>
</html>
