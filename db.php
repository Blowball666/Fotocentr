<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbfotoc";

$conn = mysqli_connect($server, $username, $password, $dbname);

if(!$conn){
    die("Connection Fialed". mysqli_error());
}
else{
    "Успех";
}
?>