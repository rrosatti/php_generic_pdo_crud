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
        
        $muscleGroup = new MuscleGroup($conn);
        $muscleGroups = $muscleGroup->readAll();
        
        foreach ($muscleGroups as $mg) {
            echo "<p>ID: " . $mg->id . "\tName: " . $mg->name . "</p>";
        }
        
        //$muscleGroup->create("Random muscle");
        //$muscleGroup->delete(8);
        //$muscleGroup->delete(9);
        //$updatedValues = array("name" => "Updated Random muscle");
        //$clause = array("id = " => 11);
        //$muscleGroup->update($updatedValues, $clause);
        
        
        ?>
    </body>
</html>
