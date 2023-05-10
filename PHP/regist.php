<?php
$user_name = $_POST["user_name"];
$login = $_POST["login"];
$password = $_POST["password"];
$password_repeat = $_POST["password_repeat"];


if ($password !=$password_repeat){
    echo "Пароли не совпадают";

}
else{
    echo True;
}
