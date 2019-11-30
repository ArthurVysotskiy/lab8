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

<form action="updateShop.php" method="post">
        <label>Номер магазину, який змінюємо</label><input name="id" type="text"><br>
        <label>Нове значення адреси</label><input name="shop_adress" type="text"><br>
        <label>Новий власник</label><input name="vlasnyk" type="text"><br>
		<label>Нова назва магазину</label><input name="name" type="text"><br>
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>