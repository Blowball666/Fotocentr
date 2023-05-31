<?php 
require_once('db.php'); 
 
if(isset($_POST['filterDate'])) { 
    $filterDate = $_POST['filterDate']; 
 
    $ordersQuery = "SELECT Zakaz.id, Zakaz.date, Polzovatel.nam AS ClientName, Tovar.name AS ProductName FROM Zakaz INNER JOIN Polzovatel ON Zakaz.Polzovatel_id = Polzovatel.id INNER JOIN Tovar ON Zakaz.Tovar_id = Tovar.id WHERE Zakaz.date = '$filterDate';"; 
    $ordersResult = $conn->query($ordersQuery); 
 
    if ($ordersResult->num_rows > 0) { 
        echo '<h2>Отчет</h2>'; 
 
        echo '<table style="border-collapse: collapse; width: 100%;">'; 
        echo '<tr><th style="border: 1px solid black; padding: 8px;">Дата заказа</th><th style="border: 1px solid black; padding: 8px;">Клиент</th><th style="border: 1px solid black; padding: 8px;">Товар</th></tr>'; 
 
        while ($row = $ordersResult->fetch_assoc()) { 
            echo '<tr>'; 
            echo '<td style="border: 1px solid black; padding: 8px;">' . $row['date'] . '</td>'; 
            echo '<td style="border: 1px solid black; padding: 8px;">' . $row['ClientName'] . '</td>'; 
            echo '<td style="border: 1px solid black; padding: 8px;">' . $row['ProductName'] . '</td>'; 
            echo '</tr>'; 
        } 
 
        echo '</table>'; 
    } else { 
        echo 'Нет заказов в эту дату.'; 
    } 
} 
?>