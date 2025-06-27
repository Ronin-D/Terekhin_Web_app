<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $pdo->query("INSERT INTO users (username, password) VALUES ('$username', '$password')");
    echo "Пользователь зарегистрирован!";
}
?>

<form method="POST">
    Логин: <input name="username"><br>
    Пароль: <input name="password" type="password"><br>
    <button type="submit">Зарегистрироваться</button>
</form>
