<?php
date_default_timezone_set("Europe/Moscow");
$title = "Моя страница";
$page = "index";
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
        table { border-collapse: collapse; margin: 20px auto; width: 80%; }
        th, td { border: 1px solid #999; padding: 8px; }
        th { background: #00FFFF; }
        img { display: block; margin: 20px auto; max-width: 80%; }
        footer { background: #00FFFF; padding: 10px; text-align: center; margin-top: 20px; }
        #forma { border: 1px solid gray; padding: 15px; width: 80%; margin: 20px auto; background: #f0ffff; }
    </style>
</head>
<body>

    <h1>Личная страница</h1>

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

    <h2>Немного обо мне</h2>
    <ul>
        <?php
        $a = array("Люблю черный", "Думаю о будущем", "Да", "Нет");
        foreach ($a as $x) {
            echo "<li>" . $x . "</li>";
        }
        ?>
    </ul>

    <table id="p3">
        <tr>
            <th colspan="2">Мои достижения</th>
        </tr>
        <tr>
            <td>Год</td>
            <td>Достижение</td>
        </tr>
        <tr>
            <td>2025</td>
            <td>Не выгнали</td>
        </tr>
    </table>

    <footer>
        <p>Все права принадлежат мне. Личка: @nagitalka</p>
        <p>Сформировано <?php echo date("d.m.Y"); ?> в <?php echo date("H-i-s"); ?></p>
    </footer>

</body>
</html>