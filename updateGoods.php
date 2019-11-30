<?php

$mysqli = new mysqli('localhost', 'root', '', 'product_shop'); // Створюємо нове підключення з назвою $mysqli за допомогою створення об'єта класу mysqli. Параметри підключення по порядку: сервер, логін, пароль, БД
$mysqli->set_charset("utf8"); // Встановлюємо кодування utf8

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}

$id = $_POST['id'];
$article_id = $_POST['article_id'];
$price = $_POST['price'];
$count = $_POST['count'];
$adress = $_POST['adress'];
$supplier = $_POST['supplier'];
$shop_name = $_POST['shop_name'];

$sql = "UPDATE goods SET article_id='$article_id', price='$price', count ='$count', adress ='$adress', supplier ='$supplier', shop_name ='$shop_name' WHERE id='$id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }



/*Закриваємо з'єднання*/
$mysqli->close();

include("showGoods.php")
?>
