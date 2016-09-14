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
    
    public function showAllMuscleGroups() {
        $sql = "SELECT * FROM muscle_group;";
        $this->crud->getSQLGeneric($sql);
    }
    
}
