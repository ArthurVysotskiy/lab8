<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Вставка даних</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        include("showShop.php")    
    ?>

    <form action="insertIntoShop.php" method="post">
        <label>Адреса магазину</label><input name="shop_adress" type="text"><br>
        <label>Власник</label><input name="vlasnyk" type="text"><br>
		<label>Назва</label><input name="name" type="text"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>
