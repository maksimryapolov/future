<?php
    class Db
    {
        public static function getConnection()
        {
            $host = 'localhost';
            $dbname = 'task_future';
            $user = 'root';
            $password = '';
        
            $db = new PDO("mysql:host=$host; dbname=$dbname;  charset=UTF8", $user, $password);
        
            return $db;
        }
    }
?>