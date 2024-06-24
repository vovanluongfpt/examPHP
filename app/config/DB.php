<?php
class DBConnection {
    private static $conn;
    private function __construct()
    {
    }
    static function getConnection() {
        if(!isset($conn)) {
            try {
                self::$conn = new PDO("mysql:host=localhost:3306; dbname=demo","root","");
                
            } catch(Exception $e) {
                echo "Connection error".$e ->getMessage();
            }
        }
        return self::$conn;
    }
}

?>