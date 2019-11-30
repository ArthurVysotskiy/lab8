<?php

$mysqli = new mysqli('localhost', 'root', '', 'product_shop'); // Створюємо нове підключення з назвою $mysqli за допомогою створення об'єта класу mysqli. Параметри підключення по порядку: сервер, логін, пароль, БД
$mysqli->set_charset("utf8"); // Встановлюємо кодування utf8

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}


$sale_id = $_POST['sale_id'];
$goods = $_POST['goods'];
$shopper = $_POST['shopper'];
$sum = $_POST['sum'];
$date = $_POST['date'];

$sql = "UPDATE sales SET sale_id='$sale_id', goods='$goods', shopper ='$shopper', sum ='$sum', date ='$date' WHERE sale_id = '$sale_id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }



/*Закриваємо з'єднання*/
$mysqli->close();

include("showSales.php")
?>
