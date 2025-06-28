<?php
require 'db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $u = $_POST['username'];
    $p = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$u' AND password = '$p'";
    $result = $conn->query($sql);

    if ($row = $result->fetch_assoc()) {
        setcookie("user", $row['username'], time() + 3600, "/");
        header("Location: welcome.php");
        exit;
    } else {
        echo "Неверный логин или пароль";
    }
}
?>

<form method="post">
  <input name="username" placeholder="Логин">
  <input name="password" type="password" placeholder="Пароль">
  <button>Войти</button>
</form>
