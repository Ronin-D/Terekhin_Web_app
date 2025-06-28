<?php
require 'db.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $u = $_POST['username'];
    $p = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $u, $p);
    $stmt->execute();
    echo "Пользователь зарегистрирован";
    exit;
}
?>
<form method="post">
  <input name="username" placeholder="Логин">
  <input name="password" type="password" placeholder="Пароль">
  <button>Зарегистрироваться</button>
</form>
