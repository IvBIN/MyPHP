<?php
session_start();
$login = $_POST["login"];
$password = $_POST["password"];
$temp_password ='$2y$10$KuF6zzSsAetogYKbtBdu7ehqPPoA79Ju/xcSgOT3YPME6knk4RAz.';
if (!empty($login)){
    if (!empty($password)) {
        $file = file_get_contents('../db.json');
        $data_from_file = json_decode($file);
        if (!empty($data_from_file)){
            foreach ($data_from_file as $user){
                if ($user->login == $login){
                    if (password_verify($password, $user_password)){
                        header("Location: ../index.php");
                        $_SESSION["message"] = "Добро пожаловать!";
                    }
                }
            }
        }


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
