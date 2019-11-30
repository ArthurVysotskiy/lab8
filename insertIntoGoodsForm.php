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
        include("showGoods.php")    
    ?>

    <form action="insertIntoGoods.php" method="post">
        <label>Назва товару</label><input name="article_id" type="text"><br>
        <label>Ціна</label><input name="price" type="text"><br>
		<label>Кількість</label><input name="count" type="text"><br>
		<label>Адреса складу</label><input name="adress" type="text"><br>
		<label>Поставник</label><input name="supplier" type="text"><br>
		<label>Назва магазину</label><input name="shop_name" type="text"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>
