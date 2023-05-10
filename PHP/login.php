<?php
session_start();
$login = $_POST["login"];
$password = $_POST["password"];

if (!empty($login)){
    if (!empty($password)){
        header("Location: ../index.php");
        $_SESSION["message"] = "Добро пожаловать!";
    }
    else{
        $_SESSION["error"] = "Поле 'пароль' пустое!";
        header("Location: ../pages/login.php");
    }
}
else{
    $_SESSION["error"] = "Поле 'логин' пустое!";
    header("Location: ../pages/login.php");
}
