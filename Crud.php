<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Crud
 *
 * @author rodri
 */

header('Content-Type: text/html; charset=utf-8');

class Crud {
    
    // PDO connection 
    private $pdo = null;
    
    // Table name
    private $table = null;
    
    // Static instance for Crud class
    private static $crud = null;
    
    /**
     * 
     * @param type $conn = PDO Connection
     * @param type $table = Table Name
     */
    private function __construct($conn, $table = NULL) {
        if (!empty($conn)) {
            $this->pdo = $conn;
        } else {
            echo "<p>There is no connection!</p>";
            exit();
        }
        
        if (!empty($table)) {
            $this->table = $table;
        }
    }
    
    /**
     * This function returns an instance for the Crud class
     * 
     * @param type $conn = PDO Connection
     * @param type $table = Table Name
     * @return instance for the Crud class
     */
    public static function getInstance($conn, $table = NULL) {
        
        // Check if there is already an instance
        if (!isset(self::$crud)) {
            try {
                self::$crud = new Crud($conn, $table);
            } catch (Exception $ex) {
                echo "Error: " . $ex->getMessage();
            }
        }
        
        return self::$crud;
    }
    
    /**
     * Set the table name;
     * 
     * @param type $table = Table Name
     */
    public function setTableName($table) {
        if (!empty($table)) {
            $this->table = $table;
        }
    }
    
    /**
     * This method builds a SQL INSERT query 
     * 
     * @param type $dataArray = Data Array containing columns and values
     * @return String containing the query statement
     */
    public function buildInsert($dataArray) {
        
        $sql = "";
        $fields = "";
        $values = "";
        
        // build the statement with fields and values;
        foreach ($dataArray as $key => $value) {
            $fields .= $key . ', ';
            //$values .= '?, ';
            $values .= $value . ', ';
        }
        
        // remove the comma at the final of the String
        $fields = (substr($fields, -2) == ', ') ? trim(substr($fields, 0, (strlen($fields) -2))) : $fields;
        
        // remove the comma at the final of the String
        $values = (substr($values, -2) == ', ') ? trim(substr($values, 0, (strlen($values) -2))) : $values;
        
        // create the query using the $fields and $values
        $sql .= "INSERT INTO {$this->table} (" . $fields . ") VALUES(" . $values . ")"; 
        
        // return the String containing the SQL query
        return trim($sql);
    }
    
}
