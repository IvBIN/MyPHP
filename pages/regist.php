<head>
    <title>Регистрация</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body class="regist_body">
<form action="../PHP/regist.php" method="post" class="regist">
    <h2>Регистрация</h2>
    <label for="user_name">Введите ваше имя:</label><br>
    <input type="text" name="user_name" id="user_name" required><br>

    <label for="login">Введите логин:</label><br>
    <input type="text" name="login" id="login" required><br>

    <label for="password">Введите пароль:</label><br>
    <input type="text" name="password" id="password" required><br>

    <label for="password_repeat">Повторите пароль:</label><br>
    <input type="text" name="password_repeat" id="password_repeat" required><br>

    <input type="submit" value="Создать аккаунт">
    <a href="./login.php">Авторизация</a>
    <a href="../index.php">На главную</a>

</form>
</body>
