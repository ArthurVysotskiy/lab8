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

<form action="deleteFromSales.php" method="post">
        <label>Номер покупки яку видаляємо</label><input name="sale_id" type="text"><br>
        <input type="submit" value="Видалити рядок">
</form>

</body>
</html>