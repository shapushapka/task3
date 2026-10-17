<?php
date_default_timezone_set("Europe/Moscow");
$title = "Регистрация";
$page = "reg";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <style>
        body { font-family: Arial; margin: 20px; }
        h1 { color: #555; }
        nav { background: #00FFFF; padding: 10px; text-align: center; }
        nav a { color: #003333; text-decoration: none; margin: 0 8px; }
        nav a.selected_menu { font-weight: bold; text-decoration: underline; }
        footer { background: #00FFFF; padding: 10px; text-align: center; margin-top: 20px; }
        #forma { border: 1px solid gray; padding: 15px; width: 80%; margin: 20px auto; background: #f0ffff; }
    </style>
</head>
<body>

    <h1>Регистрация</h1>

    <nav>
        <?php $class = ($page == "index") ? "selected_menu" : ""; ?>
        <a href="index.php" class="<?php echo $class; ?>">Начало</a>

        <?php $class = ($page == "photo") ? "selected_menu" : ""; ?>
        <a href="photo.php" class="<?php echo $class; ?>">Фото</a>

        <?php $class = ($page == "table") ? "selected_menu" : ""; ?>
        <a href="table.php" class="<?php echo $class; ?>">Таблица</a>

        <?php $class = ($page == "reg") ? "selected_menu" : ""; ?>
        <a href="reg.php" class="<?php echo $class; ?>">Регистрация</a>
    </nav>

    <form id="forma" action="https://httpbin.org/post" method="POST">
        <p>Логин
            <input type="text" name="login" size="40">
        </p>
        <p>Пароль
            <input type="password" name="password" size="40">
        </p>
        <p>EMAIL
            <input type="email" name="email" size="40">
        </p>
        <p><input type="submit" value="Зарегистрироваться"></p>
    </form>

    <footer>
        <p>Все права принадлежат мне. Личка: @nagitalka</p>
        <p>Сформировано <?php echo date("d.m.Y"); ?> в <?php echo date("H-i-s"); ?></p>
    </footer>

</body>
</html>