<?php
    session_start();

    $connect = mysqli_connect('188.68.222.195', 'lawliet', '19283746ads', 'accaunts');


    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $birthday = $_POST['birthday'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if($password === $password_confirm) {
        if (mysqli_query($connect, "INSERT INTO `accaunts`.`users` (`full_name`, `login`, `email`, `password`, `birthday`) VALUES ('$full_name', '$login', '$email', '$password', '$birthday')")) {
            $_SESSION['message'] = 'Успешная регистрация';
            header('Location: ../index.php');
        }
    }
    else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../register.php');
        }
    ?>