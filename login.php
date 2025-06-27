<?php
include 'db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $res = $pdo->query("SELECT * FROM users WHERE username='$username' AND password='$password'");
    if ($res->rowCount() > 0) {
        setcookie("user", $username, time()+3600);
        header("Location: welcome.php");
        exit;
    } else {
        echo "Неверные данные";
    }
}
?>

<form method="POST">
    Login: <input name="username"><br>
    Password: <input name="password" type="password"><br>
    <button type="submit">Sign in</button>
</form>
