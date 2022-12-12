<?php
    session_start();
    $connect = mysqli_connect('127.0.0.1', 'lawliet', '19283746ads', 'accaunts');
    print_r($connect);

    $login = $_POST['login'];
    $password = $_POST['password'];

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password' ");
    if(mysqli_num_rows($check_user) > 0){

        $user = mysqli_fetch_assoc($check_user);
        $_SESSION['user_avatar'] = $user['avatar'];
        $_SESSION['user_login'] = $user['login'];
        $_SESSION['user_full_name'] = $user['full_name'];

        header('Location: ../index.php');

    }
    else{
        $_SESSION['message'] = 'Неверный логин или пароль';
        header('Location: ../login.php');
    }


    ?>