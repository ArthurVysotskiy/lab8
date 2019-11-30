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

<form action="updateGoods.php" method="post">
        <label>Номер товару, який змінюємо</label><input name="id" type="text"><br>
		<label>Нова назва товару</label><input name="article_id" type="text"><br>
        <label>Нове значення ціни</label><input name="price" type="text"><br>
        <label>Нове значення кількості</label><input name="count" type="text"><br>
		<label>Нова адреса складу</label><input name="adress" type="text"><br>
		<label>Новий поставник</label><input name="supplier" type="text"><br>
		<label>Новий магазин</label><input name="shop_name" type="text"><br>
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>