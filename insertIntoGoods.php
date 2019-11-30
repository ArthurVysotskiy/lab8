<?php

$mysqli = new mysqli('localhost', 'root', '', 'product_shop'); // Створюємо нове підключення з назвою $mysqli за допомогою створення об'єта класу mysqli. Параметри підключення по порядку: сервер, логін, пароль, БД
$mysqli->set_charset("utf8"); // Встановлюємо кодування utf8

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}

$article_id = $_POST['article_id']; $price = $_POST['price']; $count = $_POST['count']; $adress = $_POST['adress']; $supplier = $_POST['supplier']; $shop_name = $_POST['shop_name'];

$sql = "INSERT INTO goods (article_id, price, count, adress, supplier, shop_name) VALUES ('$article_id', '$price', '$count', '$adress', '$supplier', '$shop_name' )";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }



/*Закриваємо з'єднання*/
$mysqli->close();

include("showGoods.php")
?>
