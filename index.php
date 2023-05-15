<?php
session_start();

$search = $_GET['search'];
file_put_contents('./welcome.txt', $search);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="container">
            <a href="#"><img class="logo" src="assets/images/logo.png" alt="logo"></a>
            <form method="get">
                <input type="text" placeholder="Поиск" name="search">
                <input type="submit" value="Найти">
            </form>
            <a href="./pages/login.php"><img class="auth" src="assets/images/profile.jpg" alt="profile"></a>
        </div>
    </header>
    <div class="content">
        <div class="container">
            <h1><?php echo $_SESSION["message"];?></h1>
            <form action="./temp.php" method="get">
                <input type="text" name="num_1">
                <input type="text" name="num_2">
                <input type="submit" value="сложить">
            </form>
        </div>
    </div>
</body>
</html>

