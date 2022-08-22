<html lang="ru">
<body>
<head>
    <meta charset="UTF-8">
    <title>lab6</title>
</head>
<?php
echo "<h2><big>Данные пользователя:<br/></big></h2>";
if (isset($_POST)) {
    echo "<br>Ваше имя: " . $_POST['name'];
    echo "<br>Email: " . $_POST['email'];
    echo "<br>Пол: " . $_POST['state'];
    echo "<br>О себе: " . $_POST['message'];
    if (isset($_FILES['resume'])) {
        $file = $_FILES['resume'];

        echo "<br><br>Загружен файл с именем '" . $file['name'] . "' и размером " . $file['size'] . " байт";
    }
}

?>

</body>
</html>
