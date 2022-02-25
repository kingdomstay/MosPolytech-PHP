<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задание 1</title>
</head>
<body>
<?php
$title = 'Задание 1';
$result = 'Создать веб-страницу с динамическим контентом. Загрузить код в удаленный репозиторий. Залить на хостинг. '
?>
<header style="display: flex; align-items: center">
    <img src="logo.png" alt="Logo" style="filter: invert(1)">
    <h1 style="text-align: center; flex: 1"><?php echo $title ?></h1>
</header>
<hr>

<main>
    <h2>Результат работы:</h2>
    <p><?php echo $result ?></p>
</main>

<footer>
    <hr>
    <p>Троицкий Кирилл Александрович, 2022</p>
</footer>
</body>
</html>