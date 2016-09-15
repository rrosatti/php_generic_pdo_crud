<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MuscleGroup
 *
 * @author rodri
 */
include_once './Crud.php';
class MuscleGroup {
    
    private $id;
    private $name;
    private $crud;
    private $conn;
    
    public function __construct() {
        //$this->name = $name;
    }
    
    public function setConn($conn) {
        $this->conn = $conn;
        $this->crud = Crud::getInstance($conn);
    }
    
    /**
     * This method get all MuscleGroups in the table
     * 
     * @return ArrayList containing all muscle groups
     */
    public function readAll() {
        $sql = "SELECT * FROM muscle_group;";
       
        return $this->crud->getSQLGeneric($sql);
        //print_r($data);
        /**foreach ($muscleGroups as $muscleGroup) {
            echo "id: " . $muscleGroup->id . "\tName: " . $muscleGroup->name . "<br>";
        }*/
        
    }
    
    
}
