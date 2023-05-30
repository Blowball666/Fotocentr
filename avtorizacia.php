<?php
require_once('db.php');

$nam = $_POST['nam'];
$email = $_POST['email'];
$telefon = $_POST['telefon'];
$pass = $_POST['pass'];

if (empty($nam) || empty($email) || empty($telefon) || empty($pass)) {
    echo "Заполните все поля!";
} else {
    $sql = "INSERT INTO Polzovatel (nam, email, telefon, pass) VALUES ('$nam', '$email', '$telefon', '$pass')";
    if ($conn->query($sql) === TRUE) {
        echo "Успешная регистрация";
    } else {
        echo "Ошибка: " . $conn->error;
    }
}
?>