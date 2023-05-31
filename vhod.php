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
        if ($nam == 'Admin' && $pass == 'admin') { 
            $ordersQuery = "SELECT Zakaz.date, Polzovatel.nam AS ClientName, Tovar.name AS ProductName FROM Zakaz INNER JOIN Polzovatel ON Zakaz.Polzovatel_id = Polzovatel.id INNER JOIN Tovar ON Zakaz.Tovar_id = Tovar.id;";
            $ordersResult = $conn->query($ordersQuery); 
 
            if ($ordersResult->num_rows > 0) { 
                $script = 'othcet.html'; 
                echo ' Отчет по ссылке m7/otchet.html'; 
            } else { 
                echo ' Нет доступных данных для отображения.'; 
            } 
 
            exit; 
        } 
    } else {
        echo "Нет такого пользователя";
    }
}
