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
<body class="reg_body">
    <form class="reg_form" action="inc/signup.php" method="post" enctype="multipart/form-data">

        <label>ФИО</label>
        <input type="text" class="login_input" name="full_name" placeholder="Введите ФИО">

        <label>email</label>
        <input type="email" class="login_input" name="email" placeholder="Введите свою почту">

        <label>Логин</label>
        <input type="text" class="login_input" name="login" placeholder="Введите свой логин">

        <label>Дата рождения</label>
        <input type="date" class="login_input" name="birthday">

        <label>Пароль</label>
        <input type="password"  class="login_input" name="password" placeholder="Введите свой пароль">

        <label>Подтверждение пароля</label>
        <input type="password"  class="login_input" name="password_confirm" placeholder="Подтвердите пароль">

        <button type="submit" class="login_button">Зарегистрироваться</button>
        <a class="reg_button" href="login.php">Войти</a>
        <a class="reg_button" href="index.php">Вернуться</a>

        <?php
        if($_SESSION['message']){
            echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
        }
        unset($_SESSION['message']);
        ?>

    </form>
</body>
</html>