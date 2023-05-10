<?php
session_start()
?>
<head>
    <title>Авторизация</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body class="login_body">
    <form action="../PHP/login.php" method="post" class="login">
        <h2>Авторизация</h2>

        <span class="error"><?php echo $_SESSION["error"]; unset($_SESSION["error"])?></span>

        <label for="login">Введите логин:</label><br>
        <input type="text" name="login" id="login"><br>

        <label for="password">Введите пароль:</label><br>
        <input type="text" name="password" id="password"><br>

        <input type="submit" value="Войти">
        <a href="regist.php">Регистрация</a>
        <a href="../index.php">На главную</a>
    </form>
</body>
