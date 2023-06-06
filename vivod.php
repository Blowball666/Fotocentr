<?php
require('db.php');

// Запросы в бд

class Query extends Database{

    public static function GetTovar() 
    {
        return self::$conn->query('SELECT * FROM Tovar');
    }

    public function hello(): string
    {
        return "Hello";
    }

}
?>