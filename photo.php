<?php
date_default_timezone_set("Europe/Moscow");
$title = "Фото";
$page = "photo";
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
        img { display: block; margin: 20px auto; max-width: 80%; }
        footer { background: #00FFFF; padding: 10px; text-align: center; margin-top: 20px; }
    </style>
</head>
<body>

    <h1>Моё фото</h1>

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

    <?php
    if (date("s") % 2 == 0) {
        $foto = "jjjjj.png";
    } else {
        $foto = "photo1.png";
    }
    ?>
    <img src="<?php echo $foto; ?>" alt="Моё фото">

    <footer>
        <p>Все права принадлежат мне. Личка: @nagitalka</p>
        <p>Сформировано <?php echo date("d.m.Y"); ?> в <?php echo date("H-i-s"); ?></p>
    </footer>

</body>
</html>