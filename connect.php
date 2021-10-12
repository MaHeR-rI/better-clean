<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="better_clean";

class Service{

    static $conn;
    // Create connection
    static function _connect($servername, $username, $password,$dbname){

        self::$conn = new mysqli($servername, $username, $password,$dbname);

        if (self::$conn->connect_error){ 

        die("Fatal Error".self::$conn->connect_error);
           }
    }
}
?>