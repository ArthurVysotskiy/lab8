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

    <form action="insertIntoSales.php" method="post">
	        <label>Номер покупки</label><input name="sale_id" type="text"><br>
        <label>Назва товару</label><input name="goods" type="text"><br>
        <label>Покупець</label><input name="shopper" type="text"><br>
		<label>Сума</label><input name="sum" type="text"><br>
		<label>Дата покупки</label><input name="date" type="text"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>
