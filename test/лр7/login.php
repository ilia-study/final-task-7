<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Document</title>
</head>
<body class="login_body">
    <form class="login_form" action="inc/signin.php" method="post">
        <label>Логин</label>
        <input type="text" class="login_input" name="login" placeholder="Введите логин">

        <label>Пароль</label>
        <input type="password"  class="login_input" name="password" placeholder="Введите пароль">

        <button type="submit" class="login_button">Войти</button>
        <a class="reg_button" href="register.php">Зарегистрироваться</a>
        <a class="reg_button" href="index.php">Вернуться</a>
        <?php
        if($_SESSION['message'] ?? null){
            echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
        }
        unset($_SESSION['message']);
        ?>
    </form>
</body>
</html>