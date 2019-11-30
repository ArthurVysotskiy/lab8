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

<form action="updateStorage.php" method="post">
        <label>Номер складу, якого змінюємо</label><input name="id" type="text"><br>
        <label>Нове значення площі</label><input name="area" type="text"><br>
        <label>Нова адреса складу</label><input name="storage_adress" type="text"><br>
		        <label>Нова ціна оренди складу</label><input name="rent_price" type="text"><br>
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>