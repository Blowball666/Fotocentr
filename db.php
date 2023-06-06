<?php
// Подклюение к бд
class Database{
    private const servername = "localhost";
    //private const username = "a0823979_dbfotoc";
    //private const password = "01042004";
    //private const dbname = "a0823979_dbfotoc";

    private const username = "root";
    private const password = "";
    private const dbname = "dbfotoc";
    
    public static $conn;

    function __construct()
    {
        self::$conn = mysqli_connect(self::servername, self::username, self::password, self::dbname);
    }

} new Database()

?>