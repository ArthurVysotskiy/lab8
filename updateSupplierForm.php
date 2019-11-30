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
        include("showSupplier.php")    
    ?>

<form action="updateSupplier.php" method="post">
        <label>Номер постачальника, якого змінюємо</label><input name="id" type="text"><br>
        <label>Новий телефон</label><input name="phone_number" type="text"><br>
        <label>Нова контактна особа</label><input name="kontakt" type="text"><br>
		        <label>Нова адреса постачальника</label><input name="adress" type="text"><br>
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>