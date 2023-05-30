<?php
require_once('db.php');

$nam = $_POST['nam'];
$pass = $_POST['pass'];

if (empty($nam) || empty($pass)) {
    echo "Заполните все поля!";
} else {
    $sql = "SELECT * FROM Polzovatel WHERE nam = '$nam' AND pass = '$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Рады Вас видеть снова!";
    } else {
        echo "Нет такого пользователя";
    }
}