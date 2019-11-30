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
        include("showSales.php")    
    ?>

<form action="updateSales.php" method="post">
        <label>Номер покупки, яку змінюємо</label><input name="sale_id" type="text"><br>
        <label>Нове значення товару</label><input name="goods" type="text"><br>
        <label>Нове значення покупця</label><input name="shopper" type="text"><br>
		<label>Нове значення суми</label><input name="sum" type="text"><br>
		<label>Нове значення дати</label><input name="date" type="text"><br>
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>