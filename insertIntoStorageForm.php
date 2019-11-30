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
        include("showStorage.php")    
    ?>

    <form action="insertIntoStorage.php" method="post">
        <label>Площа складу</label><input name="area" type="text"><br>
        <label>Адреса складу</label><input name="storage_adress" type="text"><br>
		      <label>Ціна оренди</label><input name="rent_price" type="text"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>
