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

    <form action="insertIntoSupplier.php" method="post">
        <label>Телефон постачальника</label><input name="phone_number" type="text"><br>
        <label>Контактна особа</label><input name="kontakt" type="text"><br>
		      <label>Адреса постачальника</label><input name="adress" type="text"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>
