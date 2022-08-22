<html lang="ru">
<body>
<head>
    <meta charset="UTF-8">
    <title>lab7</title>
</head>
<?php
echo "<h2><big>Данные пользователя:<br/></big></h2>";
if (isset($_POST)) {
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
    $state = filter_var(trim($_POST['state']), FILTER_SANITIZE_STRING);
    $message = filter_var(trim($_POST['message']), FILTER_SANITIZE_STRING);
    if (isset($_FILES['resume'])) {
        $file = $_FILES['resume'];

        echo "<br><br>Загружен файл с именем '" . $file['name'] . "' и размером " . $file['size'] . " байт";
    }

    $host="localhost";
    $user="root";
    $password="root";
    $db_name="questionnaires";
    $db_table="user_questionnaire";


    // Подключение к базе данных
    $conn = new mysqli($host, $user, $password, $db_name);
    if($conn->connect_error) {
        die("Connect failed: " . mysqli_connect_error());
    }
    echo "<br/>Connection successfully!";

//    $sql = "CREATE DATABASE questionnaires";
//    if($conn->query($sql)===TRUE) {
//        echo "Database created successfully<br>";
//    }

    $result = $conn->query("INSERT INTO `user_questionnaire` (`name`, `email`, `state`, `message`) VALUES ('$name', '$email', '$state', '$message')");
    if ($result == true){
        echo "<br/>Информация занесена в базу данных";
    }else{
        echo "<br/>Информация не занесена в базу данных";
    }

    $sql = "SELECT * FROM `user_questionnaire` WHERE `email` = '$email'";
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
        echo "<br/><br/>Информация о пользователе из БД:";
        $row = mysqli_fetch_assoc($result);
        echo "<br> id: ". $row["id"].
            "<br> name: ". $row["name"].
            "<br> email: ". $row["email"].
            "<br> state: ". $row["state"].
            "<br> message: ". $row["message"];
    }

    mysqli_close($conn);
}

?>

</body>
</html>
