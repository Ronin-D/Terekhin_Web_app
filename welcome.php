<?php
if (!isset($_COOKIE['user'])) {
    header("Location: login.php");
    exit;
}
echo "Привет, " . htmlspecialchars($_COOKIE['user']);
