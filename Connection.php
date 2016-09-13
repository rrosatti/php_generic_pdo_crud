<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Connection
 *
 * @author rodri
 */
class Connection {
    
    private $host; // server name
    private $username;
    private $password;
    private $dbname;
    private $conn = null;
    
    public function __construct($host, $dbname, $username, $password) {
        try {
            $conn = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "HEY!";
        } catch (Exception $ex) {
            echo "Error: " . $ex->getMessage();
        }
    }
    
    public function getConn() {
        return $conn;
    }
    
}
