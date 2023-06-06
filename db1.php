<?php
$servername = "localhost";
//$username = "a0823979_dbfotoc";
//$password = "01042004";
//$dbname = "a0823979_dbfotoc";

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