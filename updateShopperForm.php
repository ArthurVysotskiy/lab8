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
        include("showShopper.php")    
    ?>

<form action="updateShopper.php" method="post">
        <label>Номер покупця, якого змінюємо</label><input name="nomer" type="text"><br>
        <label>Нове значення ПІБ</label><input name="id" type="text"><br>
        <label>Нові інтереси</label><input name="interests" type="text"><br>
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>