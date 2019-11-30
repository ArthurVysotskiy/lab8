<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <link rel="stylesheet" href="style.css">
</head>
<body>


    <?php

    $mysqli = new mysqli('localhost', 'root', '', 'product_shop'); // Створюємо нове підключення з назвою $mysqli за допомогою створення об'єта класу mysqli. Параметри підключення по порядку: сервер, логін, пароль, БД
    $mysqli->set_charset("utf8"); // Встановлюємо кодування utf8
    
    if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
    }

    /* Надсилаємо запит серверу */
    if($result = $mysqli->query('SELECT g.article_id, sh.name, s.kontakt, s.adress FROM goods AS g LEFT JOIN shop AS sh ON g.shop_name = sh.name INNER JOIN supplier AS s ON g.supplier = s.kontakt ORDER BY g.id')) {   // $mysqli - наш об'єкт, через який здійснюємо підключення, query - метод, який дозволяє виконати довільний запит

        printf("<h3>Звіт - Список товарів, магазинів і постачальників: </h3><br>");   // <br> в html - розрив рядка
        printf("<table><tr><th>Назва товару</th><th>Назва магазину</th><th>Постачальник</th><th>Адреса постачальника</th></tr>");   // <br> в html - розрив рядка
        /* Вибірка результатів запиту  */
        while( $row = $result->fetch_assoc() ){ // fetch_assoc() повертає рядок із запиту у вигляді асоціативного масиву, наприклад $row = ['id'=>'1', 'pib'=>'Олександр', 'grupa'=>'ІПЗ-31']
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['article_id'], $row['name'], $row['kontakt'], $row['adress']); //виводимо результат на сторінку
        };
        printf("</table>");
        /*Звільняємо пам'ять*/
        $result->close();
    }

    /*Закриваємо з'єднання*/
    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
		<li><a href="showGoods.php">Таблиця Goods</a></li>
		<li><a href="showSales.php">Таблиця Sales</a></li>
		<li><a href="showShop.php">Таблиця Shop</a></li>
		<li><a href="showShopper.php">Таблиця Shopper</a></li>
		<li><a href="showStorage.php">Таблиця Storage</a></li>
		<li><a href="showSupplier.php">Таблиця Supplier</a></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
